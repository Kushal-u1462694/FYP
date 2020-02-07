<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carer;
use\App\Management;
use\App\Doctor;


class Patient extends Model
{
    protected $fillable=['fname' , 'lname','email','address','postcode','dob','carer_id'];

public function carer() {

    return $this->belongsTo(Carer::class);
}

// public function doctors() {


//     return $this->belongsToMany(Doctor::class);

// }

// public function managements()
// {

//     return $this->belongsToMany( 'App\Patient', 'managements', 'patient_id', 'doctor_id', 'medicine_id', 'schedule_id', 'reference' );
// }

public function medicines() {

    return $this->belongsToMany(Medicine::class,'managements', 'patient_id', 'medicine_id')->withPivot('medicine_id','doctor_id','schedule_id','reference');

}

public function doctors() {

    return $this->belongsToMany(Doctor::class,'managements', 'patient_id', 'doctor_id')->withPivot('schedule_id','doctor_id','reference');

}

public function schedules() {

    return $this->belongsToMany(Schedule::class,'managements', 'patient_id','schedule_id')->withPivot('doctor_id','medicine_id','reference');

}


public function managements() {

    return $this->hasMany(Management::class);
}

}

