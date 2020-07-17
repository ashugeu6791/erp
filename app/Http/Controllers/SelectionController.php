<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class SelectionController extends Controller
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

    public function discussion()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('discussion');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return view('discussion');
        }
    }

    public function exam()
    {
        return view('exam');

    }
    public function calendar()
    {
        return view('calendar');
    }
    public function meetings()
    {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return view('meetings');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function contacts()
    {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return view('contacts');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function crm()
    {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return view('crm');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function website()
    {
        return view('website');
    }
    public function openeducat()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('openeducat');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort('openeducat'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function course()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('course');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort('course'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }

    public function alumni()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('alumni');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function faculties()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('faculties');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort('faculties'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function quiz()
    {
        if((Auth::user()->UserType) == '1')
        {
            return view('quiz');
        }
        elseif((Auth::user()->UserType) == '3')
        {
            return response(abort('quiz'));
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function lms()
    {
        return view('lms');
    }
    public function attendence()
    {
        return view('attendence');
    }


    public function awards()
    {
        return view('award');
    }

    
    public function placements()
    {
        return view('placements');
    }

    public function add_jobs()
    {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return view('add_jobs'); 
        }
        elseif((Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }

    public function edit()
    {
        if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif((Auth::user()->UserType) == '3')
        {   
            $userid = Auth::user()->userid;
            $students = DB::select( DB::raw("SELECT * FROM students WHERE userid = '$userid'") );
            return view('edit_profile')->with('students',$students);
        }
    }

    

}
