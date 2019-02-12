<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company;
use Uuid;
use Auth;
use App\User;
use App\Model\Job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminController extends Controller
{
    public function dashboard() {
        if(Auth::user()->company()->uid != 'administration') {return redirect()->route('home');}
        $companies = Company::get();
        $jobs = Job::get();

        return view('admin.dashboard')->with('companies',$companies)->with('jobs',$jobs);
    }
}
