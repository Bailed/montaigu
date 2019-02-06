<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company;
use Uuid;

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
        Company::create([
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
            'company_values' => json_encode($values)
        ]);

        return view('company.create')->with('success','Entreprise enregistrée');
    }

}
