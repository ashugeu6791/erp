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
        if(Auth::user()->name == 'Test User')
        {
            return view('discussion');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif(Auth::user()->name == 'Faculty')
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
        if(Auth::user()->name == 'Test User' || Auth::user()->name == 'Faculty')
        {
            return view('meetings');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function contacts()
    {
        if(Auth::user()->name == 'Test User' || Auth::user()->name == 'Faculty')
        {
            return view('contacts');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function crm()
    {
        if(Auth::user()->name == 'Test User' || Auth::user()->name == 'Faculty')
        {
            return view('crm');
        }
        elseif(Auth::user()->name == 'Student')
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
        if(Auth::user()->name == 'Test User')
        {
            return view('openeducat');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort('openeducat'));
        }
        elseif(Auth::user()->name == 'Faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function course()
    {
        if(Auth::user()->name == 'Test User')
        {
            return view('course');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort('course'));
        }
        elseif(Auth::user()->name == 'Faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }

    public function alumni()
    {
        if(Auth::user()->name == 'Test User')
        {
            return view('alumni');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort(403,'Unauthorized Access'));
        }
        elseif(Auth::user()->name == 'Faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function faculties()
    {
        if(Auth::user()->name == 'Test User')
        {
            return view('faculties');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort('faculties'));
        }
        elseif(Auth::user()->name == 'Faculty')
        {
            return response(abort(403,'Unauthorized Access'));
        }
    }
    public function quiz()
    {
        if(Auth::user()->name == 'Test User')
        {
            return view('quiz');
        }
        elseif(Auth::user()->name == 'Student')
        {
            return response(abort('quiz'));
        }
        elseif(Auth::user()->name == 'Faculty')
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
