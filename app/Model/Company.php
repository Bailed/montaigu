<?php

namespace App\Model;

use App\Model\Job;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'name',
        'address',
        'zip',
        'town',
        'siren',
        'contact_first_name',
        'contact_last_name',
        'contact_status',
        'contact_phone',
        'contact_mail',
        'activity_area',
        'nb_jobs',
        'company_values',
        'accompagnement',
        'confirmation',
        'logo',
        'jeunes',
        'jeunes_types'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function jobs() {
         return Job::where('company_uid',$this->uid)->get();
     }
}
