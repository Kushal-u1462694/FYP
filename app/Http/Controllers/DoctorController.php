<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors  = Doctor::all();

        return view('doctors.index')->with(['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.newDoctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        Doctor::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'dob' => $request->input('dob'),
            'surgery_id' => $request->input('surgery_id'),
        ]);

        // return view('doctors.newDoctor');
        return  redirect()->back()->with('info', "Doctor Succesfully Added");

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.editDoctor', compact ('doctor'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

 {
    $doctor = Doctor::find($id);
    $doctor->update([
        "fname" => $request->get('fname'),
       "lname" => $request->get('lname'),
       "dob" => $request->get('dob'),
        "surgery_id" => $request->get('surgery_id'),

    ]);
    $doctors  = Doctor::all();
    //     return redirect('patients/edit/6')->with(['patients'=>$patients])->with('info', 'Data Updated');
        return  redirect()->back()->with('info', "Doctor updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        $doctors  = Doctor::all();
        // return view('doctors.index')->with(['success'=>'Data Updated','patients'=>$patients]);
        return  redirect()->back()->with('info', "Doctor Deleted");
    }
}
