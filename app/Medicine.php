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
}
