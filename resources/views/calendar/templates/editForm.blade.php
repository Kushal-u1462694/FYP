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
    <form method="post" action="{{action('EventController@update', $events->id)}}">
        {{ csrf_field() }}
        <div class = "container">
            <div class = "jumbotron" style = "margin-top: 5%">
                <h1> Update Schedule </h1>
                <hr>
                <input type = "hidden" name= "_method" value = "UPDATE"/>
                <div class = "form-group">
        <label for="">Enter Patient Name: </label>
                <input type="text" class = "form-control" name = "name" placeholder="Enter Name" value="{{$events->name}}">  <br>
                </div>
                <div class = "form-group">
        <label for="">Enter Medicine for Patient: </label>
                <input type="text" class = "form-control" name = "medicine" placeholder="Enter Medicine Name" value="{{$events->medicine}}"> <br>
                </div>
                <div class = "form-group">
        <label for="">Enter start Date of Event: </label>
                <input type="datetime-local" class = "form-control" name = "to" placeholder="Enter Start Date" value="{{$events->to}}"> <br>
                <div class = "form-group">
        <label for="">Enter end Date of Event: </label>
                <input type="datetime-local" class = "form-control" name = "from" placeholder="Enter Start Date" value="{{$events->from}}"> <br>
                </div>
                {{method_field('PUT')}}
        <button type="submit" name="submit" class = "btn btn-success"> Update Schedule </button>
            </div>
        </div>

        </form>
    </div>
</div>
</body>
</html>
@endsection
