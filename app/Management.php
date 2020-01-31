<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Patient;
use App\Schedule;



class Management extends Model
{
    protected $fillable=['patient_id', 'medicine_id','doctor_id','schedule_id','reference'];

    public function doctors(){

        return $this->belongsTo(Doctor::class);
    }
    public function patients(){

        return $this->belongsTo(Patient::class);
    }
    public function schedules(){

        return $this->belongsTo(Schedule::class);
    }
}
