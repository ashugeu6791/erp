<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('discussion');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
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
        if(strtolower(Auth::user()->UserType) == 'admin' || strtolower(Auth::user()->UserType) == 'faculty')
        {
            return view('meetings');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function contacts()
    {
        if(strtolower(Auth::user()->UserType) == 'admin' || strtolower(Auth::user()->UserType) == 'faculty')
        {
            return view('contacts');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function crm()
    {
        if(strtolower(Auth::user()->UserType) == 'admin' || strtolower(Auth::user()->UserType) == 'faculty')
        {
            return view('crm');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
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
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('openeducat');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort('openeducat'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function course()
    {
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('course');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort('course'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }

    public function alumni()
    {
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('alumni');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function faculties()
    {
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('faculties');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort('faculties'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function quiz()
    {
        if(strtolower(Auth::user()->UserType) == 'admin')
        {
            return view('quiz');
        }
        elseif(strtolower(Auth::user()->UserType) == 'student')
        {
            return response(abort('quiz'));
        }
        elseif(strtolower(Auth::user()->UserType) == 'faculty')
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

}
