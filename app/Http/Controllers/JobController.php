<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\User;
use App\Job;
use App\Students_Application;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class JobController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    	
   public function add(Request $request) {
    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
        }

    function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); 
    
        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
        }
    
        return $token;
    }

    $job = new Job([
        'company' => $request->get('company'),
        'company_description' => $request->get('about'),
        'designation' => $request->get('designation'),
        'role' => $request->get('roles'),
        'jlocation'=> $request->get('jlocation'),
        'ilocation'  => $request->get('ilocation'),
        'package' => $request->get('package'),
        'salary_details' => $request->get('salary'),
        'bond' => $request->get('bond'),
        'apply_by' => $request->get('apply_by'),
        'selection_details' => $request->get('selection_process'),
        'tenthpercentage' => $request->get('10th_marks'),
        'twelfthpercentage' => $request->get('12th_marks'),
        'sgpa' => $request->get('sgpa'),
        'backlogs' => $request->get('backlogs'),
        'courses' => $request->get('eligible_course'),
        'branches' => $request->get('eligible_branch'),
        'year' => $request->get('eligible_year'),
        'verification_token' => getToken(75) //Just to be sure if student is applying from his side and 
                                            // changes anything in the html view then wrong data is not passed.
        ]);
    $job->save();
    echo '<script>alert("Job Added") </script>';
    return view ("add_jobs");
    }


    public function apply($token)
    {
        $userid = Auth::user()->userid;
        $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
        $applied = DB::select( "SELECT * FROM students__applications WHERE userid = '$userid' AND verification_token = '$token'");
        if ($applied == NULL)
        {
            $student = DB::select( "SELECT * FROM students WHERE userid = '$userid'");
            $branch = json_decode($job[0]->branches);
            $course = json_decode($job[0]->courses);
            $year = json_decode($job[0]->year);
            $lencourse = count($course);
            $lenbranch = count($branch);
            $lenyear = count($year);
            //$len = ($lencourse > $lenbranch) ? ($lencourse > $lenyear ? $lencourse : $lenyear) : ( $lenbranch > $lenyear ? $lenbranch : $lenyear );
            for ($j=0; $j < $lencourse ; $j++)
            {
                    if($course[$j] == $student[0]->course)
                    {
                        for ($k=0; $k < $lenbranch ; $k++)
                        {
                            if($branch[$k] == $student[0]->branch)
                            {
                                for ($l=0; $l < $lenyear ; $l++)
                                {
                                    if($year[$l] == $student[0]->grad_year)
                                    {
                                        $c = 1;
                                    }
                                    else{
                                        $c = 0;
                                    }
                                }
                            }
                            else
                            {
                                $c = 0;
                            }
                        }
                    }
                    else
                    {
                        $c = 0;
                    }

            }

            if($c==1 && $student[0]->tenthpercentage >= $job[0]->tenthpercentage 
                && $student[0]->twelfthpercentage >= $job[0]->twelfthpercentage
                && $student[0]->sgpa >= $job[0]->sgpa
                && $student[0]->backlogs <= $job[0]->backlogs){
                $application = new Students_Application([
                    'userid' => $student[0]->userid,
                    'name' => $student[0]->name,
                    'fname' => $student[0]->fname,
                    'mname' => $student[0]->mname,
                    'email' => $student[0]->email,
                    'phone' => $student[0]->phone,
                    'dob' => $student[0]->dob,
                    'course' => $student[0]->course,
                    'branch' => $student[0]->branch,
                    'sgpa' => $student[0]->sgpa,
                    'company' => $job[0]->company,
                    'designation' => $job[0]->designation,
                    'package' => $job[0]->package,
                    'apply_by' => $job[0]->apply_by,
                    'verification_token' => $token,
                    ]);
                $application->save();
            }
        else{
            return response(abort(403,''));
        }
    }
    else{
        return response(abort(403,''));
    }
    }

    public function applicants($token)
    {
        if(Auth::user()->UserType == 1 || Auth::user()->UserType == 2)
        {
            
            $applicants = DB::select( "SELECT * FROM students__applications WHERE verification_token = '$token'");
            $jobs = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
            return view('applicants')->with('jobs',$jobs)->with('students__applications',$applicants);
        }
        elseif(Auth::user()->UserType == 3){
            return response(abort(403,''));
        }
    }

    public function index($token)
    {
            if(Auth::user()->UserType == 3){

                    $userid = Auth::user()->userid;
                    $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
                    $applied = DB::select( "SELECT * FROM students__applications WHERE userid = '$userid' AND verification_token = '$token'");
                    if ($applied == NULL)
                    {
                    $ap = 0;
                    $student = DB::select( "SELECT * FROM students WHERE userid = '$userid'");
                    $branch = json_decode($job[0]->branches);
                    $course = json_decode($job[0]->courses);
                    $year = json_decode($job[0]->year);
                    $lencourse = count($course);
                    $lenbranch = count($branch);
                    $lenyear = count($year);
                    for ($j=0; $j < $lencourse ; $j++)
                    {
                            if($course[$j] == $student[0]->course)
                            {
                                for ($k=0; $k < $lenbranch ; $k++)
                                {
                                    if($branch[$k] == $student[0]->branch)
                                    {
                                        for ($l=0; $l < $lenyear ; $l++)
                                        {
                                            if($year[$l] == $student[0]->grad_year)
                                            {
                                                $c = 1;
                                            }
                                            else{
                                                $c = 0;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $c = 0;
                                    }
                                }
                            }
                            else
                            {
                                $c = 0;
                            }

                    }

                    if($c==1 && $student[0]->tenthpercentage >= $job[0]->tenthpercentage 
                        && $student[0]->twelfthpercentage >= $job[0]->twelfthpercentage
                        && $student[0]->sgpa >= $job[0]->sgpa
                        && $student[0]->backlogs <= $job[0]->backlogs)
                        {
                            $t == 1;
                        }
                    else{
                            $t = 0;
                    }
                }
                else{
                    $ap = 1;
                }
                    $jobs = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
                    $data = $t;
                    return view('view_job')->with('data', $data)->with('ap', $ap)->with('jobs',$jobs);
                }

            else {
                $jobs = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
                return view('view_job')->with('jobs',$jobs);
            }
    }

    public function delete($token) 
    { 
        $c = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
        if($c == NULL){
            return redirect()->back()->with("error","Token Error. Try Again!");
        }
        else{
            DB::delete( "DELETE FROM jobs WHERE verification_token = '$token'");
            return redirect()->back()->with("success","Job Deleted");
        }
    }

    public function search(Request $request) {
        $q = $request->input('q');
        $jobs = DB::table('jobs')->where('company',$q)->simplepaginate(7);
        return view ('jobs')->with('jobs',$jobs);
    }

    public function export($token) 
    {
        $applicants = DB::select( "SELECT * FROM students__applications WHERE verification_token = '$token'");
        dd($applicants);
    }

}
