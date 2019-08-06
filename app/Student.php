<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
	use Notifiable;
	protected $guard = 'student';
     protected $fillable = [
        'name', 'phone','password', 'stage','is_excellent', 'img', 'address','is_adaby', 'is_examed', 'is_examed_mcq','is_approved', 'grades',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
