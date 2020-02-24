<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Support\Str;

use App\Carer;
use App\Management;
use App\Patient;
use App\Medicine;
use App\Doctor;
use App\Schedule;

use Illuminate\Http\Request;

class CarerController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $carers= Carer::all();

        return view('carers.index')->with(['carers'=>$carers]);

    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carers.newCarer');

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
        Carer::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'dob' => $request->input('dob'),
        ]);

        return view('carers.newCarer');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

        $carer = Carer:: find($id);

        return view('carers.editCarer', compact ('carer'));

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
        // update carer

        $carer = Carer::find($id);
        $carer->update([
            "fname" => $request->get('fname'),
           "lname" => $request->get('lname'),
           "dob" => $request->get('dob'),
        ]);

        $carers  = Carer::all();
            return  redirect()->back()->with('info', "Carer updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // carer deleted

        $carer = Carer::find($id);
        $carer->delete();
        $carers  = Carer::all();
        return  redirect()->back()->with('info', "Carer Deleted");

    }

        public function getPatients($id) {
        $carer = Carer::find($id);
        // $management = Management::find($id);
        // $patients = $management->patients;
        $patients = $carer->patients;
        // dd($management);

        // $patients = $management->patients;


        // $patients = $management->patients;

        return view('carers.patients', compact('carer', 'patients'));

    }

    public function getPrescriptions($id) {
        $patient = Patient::find($id);
        $management = Management::all();
        $medicine = Medicine::find($id);
        $management = $patient->patients;
        // $patient->$medicine::find($id);
            // dd($management);
        return view('carers.managements', compact('management', '$patients'));
        // return view('carers.managements')->with(['management' => $management] , compact('management' , 'patients'));

    }

    // public function search(Request $request)
    // {
    //       $search = $request->get('term');

    //       $result = Carer::where('fname', 'LIKE', '%'. $search. '%')->get();

    //       return response()->json($result);

    // }


}
