<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Managment extends Model
{
    protected $fillable=['patient_id', 'doctor_id','medicine_id', 'schedule_id','reference'];

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
