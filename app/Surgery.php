<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class Surgery extends Model
{
    protected $fillable=['name', 'address','postcode'];

public function doctors()
{
    return $this->hasMany(Doctor::class);
}

}
