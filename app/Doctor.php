<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surgery;
use\App\Management;
use\App\Patient;


class Doctor extends Model
{
    protected $fillable=['fname', 'lname','dob','surgery_id'];

public function surgery() {

    return $this->belongsTo(Surgery::class);
}

public function patients() {

    return $this->belongsToMany(Patient::class);

}
}
