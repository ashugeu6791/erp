<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Student;
use App\User;
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
        'course' => $request->get('course'),
        'branch' => $request->get('branch')
    ]);

    $userdata = new User([
        'userid' => $request->get('userid'),
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
           $course = $data['course'];
           $branch =$data['branch'];
           $sgpa = $data['sgpa'];
                $studentdata= Student::firstOrNew(['userid'=>$userid]);
                $studentdata->userid=$userid;
                $studentdata->name=$name;
                $studentdata->fname=$fname;
                $studentdata->mname=$mname;
                $studentdata->email=$email;
                $studentdata->phone=$phone;
                $studentdata->dob=$dob;
                $studentdata->course=$course;
                $studentdata->branch=$branch;
                $studentdata->sgpa=$sgpa;
                $studentdata->save();

                $userdata= User::firstOrNew(['userid'=>$userid]);
                $userdata->userid=$userid;
                $userdata->username=$name;
                $userdata->UserType='3';
                $userdata->password= Hash::make($phone);
                $userdata->save();
        }
        return redirect("home");
    }

}