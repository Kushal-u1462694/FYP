<?php

namespace App\Http\Controllers;

use App\Surgery;
use Illuminate\Http\Request;


class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries  = Surgery::all();

        return view('surgeries.index')->with(['surgeries' => $surgeries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surgeries.newSurgery');
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
        Surgery::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'postcode' => $request->input('postcode'),
        ]);

        // return view('doctors.newDoctor');
        return  redirect()->back()->with('info', "Surgery Succesfully Added");

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
        $surgery = Surgery::find($id);
        return view('surgeries.editSurgery', compact ('surgery'));

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
    $surgery = Surgery::find($id);
    $surgery->update([
        "name" => $request->get('name'),
       "address" => $request->get('address'),
       "postcode" => $request->get('postcode'),

    ]);
    $surgeries  = Surgery::all();
    //     return redirect('patients/edit/6')->with(['patients'=>$patients])->with('info', 'Data Updated');
        return  redirect()->back()->with('info', "Surgery updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surgery = Surgery::find($id);
        $surgery->delete();
        $surgeries  = Surgery::all();
        return  redirect()->back()->with('info', "Surgery Deleted");
    }
}
