<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    public function quiz()
    {
        return $this->belongsTo('App/Quiz');
    }
}
