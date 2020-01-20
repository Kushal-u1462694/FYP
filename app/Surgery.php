<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    protected $fillable=['name', 'address','postcode'];

public function doctors()
{
    return $this->hasMany('App\Doctors');
}

}
