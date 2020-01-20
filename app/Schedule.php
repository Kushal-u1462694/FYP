<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable=['to', 'from','details'];

 public function management()
 {
     return $this->belongsTo('App\Schedule');
 }

}
