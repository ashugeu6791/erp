<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Student;
use App\User;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudInsertController extends Controller {

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function insertform() {
        if((Auth::user()->UserType) == '1')
        {
            return view('stud_create'); 
        }
        else
        {
            return response(abort(403,'Unauthorized Access'));
        }
   }

   public function change() {
    if((Auth::user()->UserType) == '1')
    {
        return view('update'); 
    }
    else
    {
        return response(abort(403,'Unauthorized Access'));
    }
}
	
   public function insert(Request $request) {
       $request->validate([
           'userid'=>'required',
           'phone'=>'required'
       ]);

       $studentdata = new Student([
        'userid' => $request->get('userid'),
        'name' => $request->get('username'),
        'fname' => $request->get('fname'),
        'mname' => $request->get('mname'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'dob' => $request->get('dob'),
        'tenthBoard' => $request->get('tenthBoard'),
        'tenthPercentage' => $request->get('tenthPercentage'),
        'twelfthBoard' => $request->get('twelfthBoard'),
        'twelfthPercentage' => $request->get('twelfthPercentage'),
        'university'=> $request->get('university'),
        'course' => $request->get('course'),
        'branch' => $request->get('branch'),
        'grad_year' => $request->get('grad_year')
    ]);

    $userdata = new User([
        'userid' => $request->get('userid'),
        'email' => $request->get('email'),
        'username' => $request->get('username'),
        'UserType' => '3',
        'password' => Hash::make($request->get('phone'))
    ]);

    $studentdata->save();
    $userdata->save();
    return redirect('home');
   }

   public function update(Request $request) 
   {
            $sgpa = $request->input('sgpa');
            $updated= date('Y-m-d H:i:s');
            $data=array("sgpa"=>$sgpa,"updated_at"=>$updated);
            $id = Auth::user()->userid;
            DB::table('students')->where("userid",$id)->update($data);
            return redirect('edit_profile');
    }


    public function upload() {
        if((Auth::user()->UserType) == '1')
        {
            return view('upload'); 
        }
        else
        {
            return response(abort(403,'Unauthorized Access'));
        }
     }

     public function edit()
     {
         if((Auth::user()->UserType) == '1' )
         {
            return view('admin_edit_student'); 
           
         }
         else
         {   
            return response(abort(403,'Unauthorized Access'));
         }
     }

     public function search(Request $request) {
        $q = $request->input('q');
        $students = DB::select( DB::raw("SELECT * FROM students WHERE userid = '$q'") );
            return view ('admin_edit_student')->with('students',$students);
    }

    public function admin_update_details(Request $request) {

        $id = $request->input('userid');
        $studentdata = [
         'name' => $request->input('name'),
         'fname' => $request->input('fname'),
         'mname' => $request->input('mname'),
         'email' => $request->input('email'),
         'phone' => $request->input('phone'),
         'dob' => $request->input('dob'),
         'course' => $request->input('course'),
         'branch' => $request->input('branch'),
         'updated_at' => date('Y-m-d H:i:s')
     ];

     $userdata = [
        'username' => $request->input('name'),
        'updated_at' => date('Y-m-d H:i:s')
     ];
     DB::table('students')->where("userid",$id)->update($studentdata);
     DB::table('users')->where("userid",$id)->update($userdata);
     return view('admin_edit_student');
    }
    
     public function uploadtodb(Request $request)
     {
        $upload = $request->file('dbfile') ;
        $v = Validator::make(
            [
                'file'      => $upload,
                'extension' => strtolower($upload->getClientOriginalExtension()),
            ],    
            [
                'file'          => 'required',
                'extension'      => 'required|in:csv',
            ]
        );
        if($v->passes()){
            $filePath = $upload->getRealPath();

        $file = fopen($filePath,'r');
        $header = fgetcsv($file);
        
        // dd($header);
        $escapedHeader=[];
        //validate
        foreach ($header as $key => $value) {
            $lheader=strtolower($value);
            $escapedItem=preg_replace('/[^a-z]/', '', $lheader);
            array_push($escapedHeader, $escapedItem);
        }

        //looping through othe columns
        while($columns=fgetcsv($file))
        {
            if($columns[0]=="")
            {
                continue;
            }
            //Data to DB

           $data= array_combine($escapedHeader, $columns);
           $userid=$data['userid'];
           $name=$data['name'];
           $fname=$data['fname'];
           $mname = $data['mname'];
           $email = $data['email'];
           $phone = $data['phone'];
           $dob = $data['dob'];
           $tenthBoard =$data['tenthboard'];
           $tenthPercentage =$data['tenthpercentage'];
           $twelfthBoard =$data['twelfthboard'];
           $twelfthPercentage =$data['twelfthpercentage'];
           $course = $data['course'];
           $branch =$data['branch'];
           $sgpa = $data['sgpa'];
           $backlogs = $data['backlogs'];
           $grad_year = $data['gradyear'];
                $studentdata= Student::firstOrNew(['userid'=>$userid]);
                $studentdata->userid=$userid;
                $studentdata->name=$name;
                $studentdata->fname=$fname;
                $studentdata->mname=$mname;
                $studentdata->email=$email;
                $studentdata->phone=$phone;
                $studentdata->dob=$dob;
                $studentdata->tenthBoard=$tenthBoard;
                $studentdata->tenthPercentage=$tenthPercentage;
                $studentdata->twelfthBoard=$twelfthBoard;
                $studentdata->twelfthPercentage=$twelfthPercentage;
                $studentdata->course=$course;
                $studentdata->branch=$branch;
                $studentdata->sgpa=$sgpa;
                $studentdata->backlogs=$backlogs;
                $studentdata->grad_year=$grad_year;
                $studentdata->save();

                $userdata= User::firstOrNew(['userid'=>$userid]);
                $userdata->userid=$userid;
                $userdata->email=$email;
                $userdata->username=$name;
                $userdata->UserType='3';
                $userdata->password= Hash::make($phone);
                $userdata->save();
        }
        echo'<script>alert("uploaded")</script>';
        return redirect("home");
        }
        else{
            echo "<script> alert('Error : CSV File Type Required');</script>";
            return view("upload");
        }
        
        
    }

}