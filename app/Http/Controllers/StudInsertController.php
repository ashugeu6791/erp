<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
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
	
   public function insert(Request $request) {
    try{
      $userid = $request->input('userid');
      $name = $request->input('username');
      $FName = $request->input('fname');
      $MName = $request->input('mname');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $dob = $request->input('dob');
      $course = $request->input('course');
      $branch = $request->input('branch');
      $data=array('userid'=>$userid,"name"=>$name,"fname"=>$FName,"mname"=>$MName,"email"=>$email,"phone"=>$phone,"dob"=>$dob,"course"=>$course,
      "branch"=>$branch);
      $userdata = array('userid'=>$userid,"username"=>$name,"UserType"=>'3',"password"=>$userid,"created_at"=>'2020-07-15 04:59:04',"updated_at"=>'2020-07-15 04:59:04');
      DB::table('students')->insert($data);
      DB::table('users')->insert(['userid'=>$userid,'username'=>$name, 'UserType' =>'3','password'=>Hash::make($phone)]);
    }
    catch(\Exception $e){
        return view("error");
    } 
   }

   public function update(Request $request) 
   {
            $sgpa = $request->input('sgpa');
            $data=array("sgpa"=>$sgpa);
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
           $userdata = array(
                "userid"=>$userid,
                "name"=>$name,
                "fname"=>$fname,
                "mname"=>$fname,
                "email"=>$email,
                "phone"=>$phone,
                "dob"=>$dob,
                "course"=>$course,
                "branch"=>$branch,
                "sgpa"=>$sgpa);
           DB::table('students')->insertOrIgnore($userdata);
           DB::table('users')->insertOrIgnore(['userid'=>$userid,'username'=>$name, 'UserType' =>'3','password'=>Hash::make($phone)]);
       
        }
        return redirect("home");
    }

}