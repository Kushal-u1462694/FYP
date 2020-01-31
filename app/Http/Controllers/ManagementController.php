<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Management;
use App\Doctor;
use App\Patient;
use App\Medicine;
use App\Schedule;
use App\Surgery;


class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $medicines = Medicine::all();
        $managements = Management::all();
        $schedules = Schedule::all();
      return view('managements.newManagement', compact('patients', 'doctors', 'medicines', 'managements', 'schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $medicines = Medicine::all();
        $managements = Management::all();
        $schedules = Schedule::all();
        Management::create([
            'patient_id' => $request->input('patient_id'),
            'doctor_id' => $request->input('doctor_id'),
            'medicine_id' => $request->input('medicine_id'),
            'schedule_id' => $request->input('schedule_id'),
            'reference' => $request->input('reference'),
        ]);
       // return view('managements.newManagement', compact('patients', 'doctors', 'medicines', 'managements', 'schedules'))->with('info', "You have added new management ");
return redirect()->back()->with('info' , " YOU ADDED A NEW MANAGMENT")->with([
    'patients' => $patients,
    'doctors' =>$doctors,
    'medicines'=>$medicines,
    'managements'=>$managements,
    'schedules'=>$schedules,

]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
