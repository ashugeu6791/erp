<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Session\Store;

class CardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cards() {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return view('admit_cards-faculties_and_admins'); 
        }
        else
        {
            $id = Auth::user()->userid;
            $students = DB::select( DB::raw("SELECT admitcard FROM students WHERE userid = '$id'") );
            if($students[0]->admitcard == 'yes')
                return view('admit_cards-students');
            else
                echo '<script> alert("Your Admit is Not Available Yet") </script>';
                return response(abort(404,''));
        }
    }

    public function search(Request $request) {
        $q = $request->input('q');
        $students = DB::select( DB::raw("SELECT * FROM students WHERE userid = '$q'") );
            return view ('admit_cards-faculties_and_admins')->with('students',$students);
    }


    public function generate(Request $request) {
        $id = $request->input('userid');
        $admitcard='yes';
        $data=array("admitcard"=>$admitcard);
        DB::table('students')->where("userid",$id)->update($data);
        return view ('admit_cards-faculties_and_admins');
    }

    public function downloadPDF( ){
        $id = Auth::user()->userid;
        $students = DB::select( DB::raw("SELECT * FROM students WHERE userid = '$id'") );
        $data = ['userid' => $students[0]->userid,          
                 'name' => $students[0]->name,          
                'branch' => $students[0]->branch, 
                'course' => $students[0]->course       
    ];


    $pdf = PDF::loadView('pdf_view', $data);
    $fn = Auth::user()->userid;
    return $pdf->download($fn . '.pdf');
  
      }
}
