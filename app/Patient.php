<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carer;
use\App\Management;
use\App\Doctor;


class Patient extends Model
{
    protected $fillable=['fname', 'lname','email','address','postcode','dob','carer_id'];

public function carer() {

    return $this->belongsTo(Carer::class);
}

public function doctors() {


    return $this->belongsToMany(Doctor::class);

}

public function managements()
{

    return $this->belongsToMany( 'App\Patient', 'managements', 'patient_id', 'doctor_id', 'medicine_id', 'schedule_id', 'reference' );
}


}

