<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    protected $table = 'students_answers';

    protected $fillable = [

        'student_id', 'quiz_id','answer', 'img', 'is_examed', 'grades',

    ];
}
