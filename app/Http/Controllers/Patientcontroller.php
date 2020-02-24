<?php

namespace App\Http\Controllers;

use App\Carer;
use App\Patient;
use App\Surgery;
use App\Doctor;
use App\Management;

use Illuminate\Http\Request;


class Patientcontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients  = Patient::all();

        return view('patients.index')->with(['patients' => $patients]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carer = Carer::all();
        $patient = Patient::all();
        return view('patients.newPatient',compact('patient','carer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carer = Carer::all();
        $patient = Patient::all();
        // dd($request);
        Patient::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'postcode' => $request->input('postcode'),
            'dob' => $request->input('dob'),
            'carer_id' => $request->input('carer_id'),
        ]);

        return view('patients.newPatient', compact('patient','carer'));

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

            $patient = Patient::find($id);
        return view('patients.editPatient', compact ('patient'));

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
        // Update Patient

        $patient = Patient::find($id);
        $patient->update([
            "fname" => $request->get('fname'),
           "lname" => $request->get('lname'),
            "email" => $request->get('email'),
            "address" => $request->get('address'),
            "postcode" => $request->get('postcode'),
           "dob" => $request->get('dob'),
            "carer_id" => $request->get('carer_id'),

        ]);
        // $patient->fname = $request->get('fname');
        // $patient->lname = $request->get('lname');
        // $patient->email = $request->get('email');
        // $patient->address = $request->get('address');
        // $patient->postcode = $request->get('postcode');
        // $patient->dob = $request->get('dob');
        // $patient->carer_id = $request->get('carer_id');
        // $patient->save();
        $patients  = Patient::all();
    //     return redirect('patients/edit/6')->with(['patients'=>$patients])->with('info', 'Data Updated');
        return  redirect()->back()->with('info', "patient updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $patient = Patient::find($id);
        $patient->delete();
        $patients  = Patient::all();
        // return view('patients.index')->with(['success'=>'Data Updated','patients'=>$patients]);
        return  redirect()->back()->with('info', "Patient Deleted");
    }

    public function getDetails($id) {

       $patient = Patient::find($id);
        // dd($patient);
       return view('patients.details', compact('patient'));
    }
    public function getManagements($id) {

        $patient = Patient::find($id);
        $doctor = Doctor::find($id);
        $management = Management::find($id);
        //  $managements = $patient->managements;
        // $managements = $patient->doctors;
         return view('patients.managements', compact('patient',  'doctor', 'management'));
     }


}
