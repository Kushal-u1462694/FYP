@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div class = "row">










        <div class = "col-md-8 col-md-offset-2">

            <div class = "panel panel-default">
                <div class = "panel heading" style = "background: #2e6da4; color:white;">

Add Event to Calendar


                </div>
                <div class = "panel-body">
    <h1>Add Patient and Medicince details</h1>

<form method="post" action="{{action('EventController@store')}}">
{{ csrf_field() }}

<label for="">Enter Patient Name: </label>
<input type="text" class = "form-control" name = "name" placeholder="Enter Name"> <br>
<label for="">Enter Medicine for Patient: </label>
<input type="text" class = "form-control" name = "medicine" placeholder="Enter Medicine Name"> <br>
<label for="">Enter start Date and Time for Patient Medicine: </label>
<input type="datetime-local" class = "start_date" name = "to" placeholder="Enter Start Date"> <br>
<label for="">Enter end Date and Time for Patient Medicine: </label>
<input type="datetime-local" class = "end_date" name = "from" placeholder="Enter Start Date"> <br>
<input type="submit" name="submit" class = "btn btn-primary" value = "Add Event Data" />
</form>

</div>
</div>
</div>
</div>
</div>

</body>
</html>
@endsection
