<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
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

=======

class Student extends Model
{
    //
>>>>>>> df43f438f381d0c6c1c4cbb422486d61fe426d27
}
