<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surgery;
use\App\Management;
use\App\Patient;
use\App\Medicine;


class Doctor extends Model
{
    protected $fillable=['fname', 'lname','dob','surgery_id'];

public function surgery() {

    return $this->belongsTo(Surgery::class);
}

// public function patients() {

//     return $this->belongsToMany(Patient::class);

// }

public function patients() {

    return $this->belongsToMany(Patient::class,'managements', 'doctor_id', 'patient_id')->withPivot('medicine_id','schedule_id','reference');

}

public function medicines() {

    return $this->belongsToMany(Medicine::class,'managements', 'doctor_id', 'medicine_id')->withPivot('patient_id','schedule_id','reference');

}

public function managements() {

    return $this->hasMany(Management::class);
}


}
