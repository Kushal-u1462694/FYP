<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Patient;
use App\Schedule;
use App\Medicine;



class Management extends Model
{
    protected $fillable=['patient_id', 'medicine_id','doctor_id','schedule_id','reference'];

    public function doctor(){

        return $this->belongsTo(Doctor::class);
    }
    public function patient(){

        return $this->belongsTo(Patient::class);
    }
    public function schedule(){

        return $this->belongsTo(Schedule::class);
    }
    public function medicine(){

        return $this->belongsTo(Medicine::class);
    }

}
