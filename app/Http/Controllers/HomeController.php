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
        $jobs = Job::where('company_uid',Auth::user()->company()->uid)->limit(20)->get();

        return view('home')->with('jobs',$jobs);
    }
}
