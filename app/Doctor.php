<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $fillable=['fname', 'lname','dob','surgery_id'];

   public function surgery()
   {
       return $this->belongsTo('App\Surgery');
   }


}
