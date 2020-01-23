<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carer;

class Patient extends Model
{
    protected $fillable=['fname', 'lname','email','address','postcode','dob','carer_id'];

public function carer() {

    return $this->belongsTo(Carer::class);
}
}

