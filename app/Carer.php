<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Management;
use App\Medicine;

class Carer extends Model
{
    //
    protected $fillable=['fname', 'lname','dob'];

    public function patients(){

        return $this->hasMany(Patient::class);

    }

    public function medicines() {

        return $this->belongsToMany(Medicine::class,'managements', 'carer_id', 'medicine_id')->withPivot('medicine_id','doctor_id','schedule_id','reference');

    }



    public function schedules() {

        return $this->belongsToMany(Schedule::class,'managements',  'carer_id','schedule_id')->withPivot('doctor_id','medicine_id','reference');

    }


    public function managements() {

        return $this->hasMany(Management::class);
    }
}
