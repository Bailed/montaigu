<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company;
use App\Model\Job;
use Uuid;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class CompaniesController extends Controller
{

    public function create() {
        return view('company.create');
    }

    public function createPost(Request $request) {

        $values = array(
            "value1" => $request->input('value_1'),
            "value2" => $request->input('value_2'),
            "value3" => $request->input('value_3'),
            "value4" => $request->input('value_4'),
            "value5" => $request->input('value_5'),
        );

        $jeunes_types = array();
        if($request->input('jeunes') == 1 ) {
            if($request->input('jeunes_types')) {
                foreach($request->input('jeunes_types') as $type) {
                    array_push($jeunes_types,$type);
                }
            }
        }

        $oldCompany = Company::where('contact_mail',$request->input('contact_mail'))->first();

        if($oldCompany) {return view('company.create')->with('error','Cet email est déjà utilisé.');}
        if($request->input('accompagner')) {$accompagner = true;} else {$accompagner = null;}
        if($request->input('confirmation')) {$confirmation = true;} else {$confirmation = null;}
        $company = Company::create([
            'uid' => Uuid::generate(),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'zip' => $request->input('zip'),
            'town' => $request->input('town'),
            'contact_first_name' => $request->input('contact_first_name'),
            'contact_last_name' => $request->input('contact_last_name'),
            'contact_status' => $request->input('contact_status'),
            'contact_phone' => $request->input('contact_phone'),
            'contact_mail' => $request->input('contact_mail'),
            'activity_area' => $request->input('activity_area'),
            'nb_jobs' => $request->input('nb_jobs'),
            'accompagnement' => $accompagner,
            'confirmation' => $confirmation,
            'company_values' => json_encode($values),
            'jeunes' => $request->input('jeunes') ?? 0,
            'jeunes_types' => json_encode($jeunes_types)
        ]);

        $oldUser = User::where('email',$request->input('contact_mail'))->first();

        if($oldUser) {return view('company.create')->with('error','Cet email est déjà utilisé.');}

        User::create([
            'name' => $request->input('name'),
            'company' => $company->uid,
            'email' => $request->input('contact_mail'),
            'password' => Hash::make($request->input('contact_password')),
        ]);

        return view('company.create')->with('success','Entreprise enregistrée');
    }

    public function update() {
        return view('company.update');
    }

    public function read($uid) {
        $company = Company::where('uid',$uid)->first();
        $jobs = Job::where('company_uid',$uid)->get();
        return view('company.read')->with('company',$company)->with('jobs',$jobs);

    }

    public function updatePost(Request $request,$uid) {

        if($request->input('accompagner')) {$accompagner = true;} else {$accompagner = null;}
        if($request->input('confirmation')) {$confirmation = true;} else {$confirmation = null;}

        $values = array(
            "value1" => $request->input('value_1'),
            "value2" => $request->input('value_2'),
            "value3" => $request->input('value_3'),
            "value4" => $request->input('value_4'),
            "value5" => $request->input('value_5'),
        );

        $jeunes_types = array();
        if($request->input('jeunes') == 1 ) {
            if($request->input('jeunes_types')) {
                foreach($request->input('jeunes_types') as $type) {
                    array_push($jeunes_types,$type);
                }
            }
        }

        if($request->file) {

            $request->validate([
                'file' => 'max:8192',
            ]);
            $request->file->move(public_path('img/logos/'), $request->file->getClientOriginalName());
        }

        $company = Company::where('uid',$uid)->update([
            'address' => $request->input('address'),
            'zip' => $request->input('zip'),
            'town' => $request->input('town'),
            'contact_first_name' => $request->input('contact_first_name'),
            'contact_last_name' => $request->input('contact_last_name'),
            'contact_status' => $request->input('contact_status'),
            'contact_phone' => $request->input('contact_phone'),
            'contact_mail' => $request->input('contact_mail'),
            'activity_area' => $request->input('activity_area'),
            'confirmation' => $request->input('confirmation') ?? null,
            'accompagnement' => $accompagner,
            'nb_jobs' => $request->input('nb_jobs'),
            'company_values' => json_encode($values),
            'logo' => $request->file ? $request->file->getClientOriginalName() : null,
            'jeunes' => $request->input('jeunes') ?? 0,
            'jeunes_types' => json_encode($jeunes_types)
        ]);

        return redirect()->route('home');

    }

}
