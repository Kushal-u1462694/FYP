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
       $managements = Management::all();
    //    return view('managements.index')->with(['managements'=>$managements]);
       return view('managements.index')->with(['managements' => $managements]);
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
       return  redirect()->back()->with('info', "Prescription Added ")->with([
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
        $management = Management::find($id);

        return view('managements.managementDetails' , compact('management')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = Patient::find($id);
        $doctors = Doctor::find($id);
        $medicines = Medicine::find($id);
        $managements = Management::find($id);
        $schedules = Schedule::find($id);
        return view('managements.editManagement', compact ('patients', 'doctors', 'medicines', 'managements', 'schedules'));
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
        $patients = Patient::find($id);
        $doctors = Doctor::find($id);
        $medicines = Medicine::find($id);
        $managements = Management::find($id);
        $schedules = Schedule::find($id);
        $managements->update([
        "patient_id" => $request->get('patient_id'),
       "doctor_id" => $request->get('doctor_id'),
       "medicine_id" => $request->get('medicine_id'),
       "schedule_id" => $request->get('schedule_id'),
       "reference" => $request->get('reference'),
    ]);
    $patients = Patient::all();
    $doctors = Doctor::all();
    $medicines = Medicine::all();
    $managements = Management::all();
    $schedules = Schedule::all();
    //     return redirect('patients/edit/6')->with(['patients'=>$patients])->with('info', 'Data Updated');
        return  redirect()->back()->with('info', "Prescription updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $doctors = Doctor::find($id);
        $medicines = Medicine::find($id);
        $managements = Management::find($id);
        $schedules = Schedule::find($id);
        $patients->delete();
        $doctors->delete();
        $medicines->delete();
        $managements->delete();
        $schedules->delete();

        $patients = Patient::all();
        $doctors = Doctor::all();
        $medicines = Medicine::all();
        $managements = Management::all();
        $schedules = Schedule::all();

        return  redirect()->back()->with('info', "Management Deleted");
    }
}
