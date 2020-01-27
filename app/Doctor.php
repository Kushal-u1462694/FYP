<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surgery;


class Doctor extends Model
{
    protected $fillable=['fname', 'lname','dob','surgery_id'];

public function surgery() {

    return $this->belongsTo(Surgery::class);
}
}
