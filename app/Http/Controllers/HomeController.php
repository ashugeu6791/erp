<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ChangePasswordview(){
        return view('auth.changepassword');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

    public function edit(){
        $id = Auth::user()->userid;
        $data = DB::select( DB::raw("SELECT * FROM students WHERE userid = '$id'") );
        return view('auth.edit')->with('data',$data);
    }

    public function save(Request $request){
        $id = Auth::user()->userid;
        $studentdata = [
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'phone' => $request->input('phone'),
         'dob' => $request->input('dob'),
        
         'fname' => $request->input('fname'),
         'mname' => $request->input('mname'),

         'p_address' => $request->input('p_address'),
         'c_address' => $request->input('c_address'),

         'updated_at' => date('Y-m-d H:i:s')
     ];

     $userdata = [
        'username' => $request->input('name'),
        'email' => $request->input('email'),
        'updated_at' => date('Y-m-d H:i:s')
     ];
     DB::table('students')->where("userid",$id)->update($studentdata);
     DB::table('users')->where("userid",$id)->update($userdata);
     return redirect()->back()->with("success","Details updated successfully !");
    }

}
