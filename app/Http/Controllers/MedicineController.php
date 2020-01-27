<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;


class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines  = Medicine::all();

        return view('medicines.index')->with(['medicines' => $medicines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicines.newMedicine');
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
        Medicine::create([
            'name' => $request->input('name'),
            'size' => $request->input('size'),
            'dosage' => $request->input('instruction'),
            'state' => $request->input('state'),
        ]);

        // return view('doctors.newDoctor');
        return  redirect()->back()->with('info', "Medicine Succesfully Added");

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
        $medicine = Medicine::find($id);
        return view('medicines.editmedicine', compact ('medicine'));

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
    $medicine = medicine::find($id);
    $medicine->update([
        "name" => $request->get('name'),
       "size" => $request->get('size'),
       "dosage" => $request->get('dosage'),
       "instruction" => $request->get('instruction'),
       "state" => $request->get('state'),
    ]);
    $medicines  = Medicine::all();
    //     return redirect('patients/edit/6')->with(['patients'=>$patients])->with('info', 'Data Updated');
        return  redirect()->back()->with('info', "Medication updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();
        $medicines  = Medicine::all();
        return  redirect()->back()->with('info', "Medication Deleted");
    }
}
