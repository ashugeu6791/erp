<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\User;
use App\Job;
use App\Students_Application;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Maatwebsite\Excel\Facades\Excel;

class JobController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    	
   public function add(Request $request) {
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
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

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $company = strtolower($request->get('company'));
        $name = $company.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/company');
        $image->move($destinationPath, $name);
    }

    $job = new Job([
        'company' => strtolower($request->get('company')),
        'image' => $name,
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

    $token = $job->verification_token;
    $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
    $branch = json_decode($job[0]->branches);
    $course = json_decode($job[0]->courses);
    $year = json_decode($job[0]->year);
    $tenthpercentage = $job[0]->tenthpercentage;
    $twelfthpercentage = $job[0]->twelfthpercentage;
    $sgpa = $job[0]->sgpa;
    $backlogs = $job[0]->backlogs;
    $geu = count(Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEU')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray());
    $gehu = count(Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEHU')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray());
    $gehub = count(Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEHUB')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray());
    
    $emails = Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->pluck('email')->toArray();
            

    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
    foreach($emails as $email)
    {
        $beautymail->send('notify', [], function($message) use ($email)
        {
            $message->from('donotreply@admin.com');
            $message->to($email);
            $message->subject('Job Posting Alert');
        });
    }

    $data = DB::table('jobs')
                ->where('verification_token', $token)
               ->update(['eligibles_geu' =>$geu,
                        'eligibles_gehu' =>$gehu,
                        'eligibles_gehub' =>$gehub]);

    

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
            $c = 0;
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
                                        break;
                                    }
                                }
                            }
                        }
                    }
            }

            if($c==1 && $student[0]->tenthPercentage >= $job[0]->tenthpercentage 
                && $student[0]->twelfthPercentage >= $job[0]->twelfthpercentage
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

                //Confirmation Mail 
                $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                $beautymail->send('mail', [], function($message) 
                {
                    $message
                        ->from('donotreply@admin.com')
                        ->to(Auth::user()->email, Auth::user()->username)
                        ->subject('Applied Succesfully');
                });


                
                return redirect()->back()->with("success","Applied");
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
            $applicants = Students_Application::where('verification_token' , $token)->get()->toArray();
            $Filename ='Applicants.csv';
            Header('Content-Type: text/csv; charset=utf-8');
            Header('Content-Type: application/force-download');
            Header('Content-Disposition: attachment; filename='.$Filename.'');
            // create a file pointer connected to the output stream
            $output = fopen('php://output', 'w');
            //fputcsv($output, $selected_array);
            foreach ($applicants as $row){
                fputcsv($output, $row);
            }
            fclose($output);
        }
        elseif(Auth::user()->UserType == 3){
            return response(abort(403,''));
        }
    }


    public function eligibles_geu($token)
    {
        if(Auth::user()->UserType == 1 || Auth::user()->UserType == 2)
        {   
            $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
            $branch = json_decode($job[0]->branches);
            $course = json_decode($job[0]->courses);
            $year = json_decode($job[0]->year);
            $tenthpercentage = $job[0]->tenthpercentage;
            $twelfthpercentage = $job[0]->twelfthpercentage;
            $sgpa = $job[0]->sgpa;
            $backlogs = $job[0]->backlogs;
            $eligibles = Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEU')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray();
            $Filename ='Eligibles_GEU.csv';
            Header('Content-Type: text/csv; charset=utf-8');
            Header('Content-Type: application/force-download');
            Header('Content-Disposition: attachment; filename='.$Filename.'');
            // create a file pointer connected to the output stream
            $output = fopen('php://output', 'w');
            //fputcsv($output, $selected_array);
            foreach ($eligibles as $row){
                fputcsv($output, $row);
            }
            fclose($output);
        }
        elseif(Auth::user()->UserType == 3){
            return response(abort(403,''));
        }
    }

    public function eligibles_gehu($token)
    {
        if(Auth::user()->UserType == 1 || Auth::user()->UserType == 2)
        {
            $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
            $branch = json_decode($job[0]->branches);
            $course = json_decode($job[0]->courses);
            $year = json_decode($job[0]->year);
            $tenthpercentage = $job[0]->tenthpercentage;
            $twelfthpercentage = $job[0]->twelfthpercentage;
            $sgpa = $job[0]->sgpa;
            $backlogs = $job[0]->backlogs;
            $eligibles = Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEHU')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray();
            $Filename ='Eligibles_GEHU.csv';
            Header('Content-Type: text/csv; charset=utf-8');
            Header('Content-Type: application/force-download');
            Header('Content-Disposition: attachment; filename='.$Filename.'');
            // create a file pointer connected to the output stream
            $output = fopen('php://output', 'w');
            //fputcsv($output, $selected_array);
            foreach ($eligibles as $row){
                fputcsv($output, $row);
            }
            fclose($output);
        }
        elseif(Auth::user()->UserType == 3){
            return response(abort(403,''));
        }
    }


    public function eligibles_gehub($token)
    {
        if(Auth::user()->UserType == 1 || Auth::user()->UserType == 2)
        {
            $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
            $branch = json_decode($job[0]->branches);
            $course = json_decode($job[0]->courses);
            $year = json_decode($job[0]->year);
            $tenthpercentage = $job[0]->tenthpercentage;
            $twelfthpercentage = $job[0]->twelfthpercentage;
            $sgpa = $job[0]->sgpa;
            $backlogs = $job[0]->backlogs;
            $eligibles = Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('university' , '=' , 'GEHUB')->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->get()->toArray();
            Header('Content-Type: text/csv; charset=utf-8');
            Header('Content-Type: application/force-download');
            Header('Content-Disposition: attachment; filename='.$Filename.'');
            // create a file pointer connected to the output stream
            $output = fopen('php://output', 'w');
            //fputcsv($output, $selected_array);
            foreach ($eligibles as $row){
                fputcsv($output, $row);
            }
            fclose($output);
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
                    $c =0;
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
                                        }
                                    }
                                }
                            }
                    }

                    if($c==1 && $student[0]->tenthPercentage >= $job[0]->tenthpercentage 
                        && $student[0]->twelfthPercentage >= $job[0]->twelfthpercentage
                        && $student[0]->sgpa >= $job[0]->sgpa
                        && $student[0]->backlogs <= $job[0]->backlogs)
                        {
                            $t = 1;
                        }
                    else{
                            $t = 0;
                    }
                }
                else{
                    $ap = 1;
                    $t = 1;
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
        $q = strtolower($request->input('q'));
        $jobs = DB::table('jobs')->where('company',$q)->simplepaginate(7);
        return view ('jobs')->with('jobs',$jobs);
    }

    public function sendMail($token)
    {
        if(Auth::user()->UserType == 1 || Auth::user()->UserType == 2)
        {
                $job = DB::select( "SELECT * FROM jobs WHERE verification_token = '$token'");
                $branch = json_decode($job[0]->branches);
                $course = json_decode($job[0]->courses);
                $year = json_decode($job[0]->year);
                $tenthpercentage = $job[0]->tenthpercentage;
                $twelfthpercentage = $job[0]->twelfthpercentage;
                $sgpa = $job[0]->sgpa;
                $backlogs = $job[0]->backlogs;
                $emails = Student::whereIN('grad_year', $year)->whereIN('course', $course)->whereIN('branch', $branch)->where('tenthPercentage' , '>=' , $tenthpercentage)->where('twelfthPercentage' , '>=' , $twelfthpercentage)->where('sgpa' , '>=' , $sgpa)->where('backlogs' , '<=' , $backlogs)->pluck('email')->toArray();
            

            $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
            foreach($emails as $email)
            {
                $beautymail->send('notify', [], function($message) use ($email)
                {
                    $message->from('donotreply@admin.com');
                    $message->to($email);
                    $message->subject('Job Posting Alert');
                });
            }

            return redirect()->back()->with("success","Notification sent");
        }
        
        elseif(Auth::user()->UserType == 3){
            return response(abort(403,''));
        }
    }

    /*

    public function export($token) 
    {
        $applicants = DB::select( "SELECT * FROM students__applications WHERE verification_token = '$token'");
        dd($applicants);
    }
    */

}