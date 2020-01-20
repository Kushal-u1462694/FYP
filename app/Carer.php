<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Carer extends Model
{
    //
    protected $fillable=['fname', 'lname','dob'];

    public function patients(){

        return $this->hasMany(Patient::class);

    }
}
