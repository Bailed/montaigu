<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Job;

use Auth;

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
        if(Auth::user()->company()->uid == "administration") {
            $jobs = Job::get();
        }
        else {
            $jobs = Job::where('company_uid',Auth::user()->company()->uid)->get();
        }
        return view('home')->with('jobs',$jobs);
    }
}
