<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\User;
use App\Model\Job;
use App\Model\Company;

use Uuid;
use Auth;

class JobsController extends Controller
{
    public function add(Request $request) {
        Job::create([
            'uid' => Uuid::generate(),
            'company_uid' => Auth::user()->company()->uid,
            'name' => $request->input('name'),
            'resume' => $request->input('resume'),
            'img_url' => $request->input('img_url')
        ]);

        return redirect()->back();
    }

    public function edit($uid) {
        $job = Job::where('uid',$uid)->first();
        return view('job.update')->with('job',$job);
    }

    public function update(Request $request, $uid) {
        Job::where('uid',$uid)->update([
            'name' => $request->input('name'),
            'resume' => $request->input('resume'),
            'img_url' => $request->input('img_url')
        ]);

        if(Auth::user()->company()->uid == "administration") {
            return redirect()->route('admin.dashboard');
        }
        else {
            return redirect()->route('home');
        }

    }

    public function delete($uid) {
        Job::where('uid',$uid)->delete();
        return redirect()->route('home');
    }

}


?>
