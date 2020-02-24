<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>


</head>
<body>
<div class = "container">
<div class = "jumbotron">

<table class = "table table-stripped table-bordered table-hover">
    <thead class = "thead">
        <tr class = "warning">
            <th> Id</th>
            <th> Patient Name</th>
            <th> Medicine Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Update/Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    @foreach($events as $event)
    <tbody>
        <tr>

            <td> {{$event->id}} </td>
            <td> {{$event->name}} </td>
            <td> {{$event->medicine}} </td>
            <td> {{$event->to}} </td>
            <td> {{$event->from}} </td>


        <th> <a href= "{{action('EventController@edit', $event['id'])}}" class = "btn btn-success">
         Edit </a>
        </th>
<th>
    <form method = "POST" action="{{action('EventController@destroy',$event['id'])}}">
{{ csrf_field() }}
<input type="hidden" name= "_method" value="DELETE"/>
<button type="submit" class="btn btn-danger">Delete </button>
    </tr>
</th>
</form>
</tbody>
@endforeach
</table>
</div>
</div>












</body>
</html>
