<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Job extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'company_uid',
        'name',
        'img_url',
        'resume'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
