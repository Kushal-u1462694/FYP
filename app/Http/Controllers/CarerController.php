<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carer;

class CarerController extends Controller
{
    public function index(){

        $carers= Carer::all();

        return view('carers.index')->with(['carers'=>$carers]);

    }
}
