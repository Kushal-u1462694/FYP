<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function useroles () {

        return view('user');

    }
    public function adminroles () {
        $userRoles = FacadesAuth::user()->roles->pluck('name');
        if (!$userRoles->contains('admin')) {
            return redirect('/permissionDenied');
        }

        return view('Middleware.CheckAdmin');

    }

    public function permissionDenied () {

        return view('layouts.nopermission');

    }


}
