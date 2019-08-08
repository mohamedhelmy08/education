<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
   protected $table = 'quizes';

   public function answers()
   {
       return $this->hasMany('App\Answer');
   }
}
