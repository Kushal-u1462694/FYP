<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
// use MaddHatter\LaravelFullcalendar\Calendar as Calendar;

// use \MaddHatter\LaravelFullcalendar\Calendar;

use Calendar;

// use \Calendar;

class EventController extends Controller

{

public function index()
{

    $events = Event::all();
    $event = [];
    foreach($events as $row){
    $enddate = $row->from. "24:00:00";
    $event[] = Calendar::event(
    $row->name,
    $row->medicine,
    false,
    new \DateTime($row->to),
    new \DateTime($row->from),
    $row->id

    );
$calendar = Calendar::addEvents($event);
    }

//dd($calendar);
return view('calendar.fullcalendar', compact('events', 'calendar'));
// return view('calendar.fullcalendar');

}

public function display()
{

return view('calendar.templates.addCalendar');

}

public function store(Request $request)
{
    $this->Validate($request,[
     'name' => 'required',
     'medicine' => 'required',
     'to' => 'required',
     'from' => 'required',

    ]);

    $events = new Event;
    $events->name = $request->input('name');
    $events->medicine = $request->input('medicine');
    $events->to = $request->input('to');
    $events->from = $request->input('from');

    $events->save();

    return redirect()->back()->with('success', 'Successfully Added Schedule for Patient');
}

public function show()

{
   $events = Event::all();
   return view('calendar/templates/display')->with('events', $events);

}

public function edit($id)

{
    $events = Event::find($id);
    return view('calendar/templates/editForm', compact('events'));

}

public function update(Request $request, $id)
{
    // $this->validate($request,[
    //     'name' => 'required',
    //     'medicine'=> 'required',
    //     'to' => 'required',
    //     'from'=> 'required',

    //     ]);

$events = Event::find($id);

$events->name =$request->input('name');
$events->medicine =$request->input('medicine');
$events->to =$request->input('to');
$events->from = $request->input('from');

$events->save();
// $events->update([
//     "name" => $request->get('name'),
//    "medicine" => $request->get('medicine'),
//    "to" => $request->get('to'),
//     "from" => $request->get('from'),
// ]);

$event = Event::all();

// $events->save();
// echo '<script> alert("Data Stored") </script>';
return redirect('calendar')->with('success', 'Schedule Updated');

    }

    public function destroy($id)
{
    $events = Event::find($id);
    $events->delete();

    return redirect('calendar')->with('success','Schedule Deleted');
}

}

