<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'file_name','stage','is_adaby', 'file',
    ];
}
