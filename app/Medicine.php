<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Patient;

class Medicine extends Model
{
    protected $fillable=['name', 'size','dosage','instruction','state'];

    public function medicines(){

        return $this->hasMany(Medicine::class);

    }

    public function patients() {

        return $this->belongsToMany(Management::class)->withPivot('patient_id','doctor_id','schedule_id','reference');


    }

}
