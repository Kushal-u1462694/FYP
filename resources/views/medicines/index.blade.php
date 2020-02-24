@extends('layouts.app')
@section('content')

<h3> All Medicines</h3>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>

<body>
<div class = "container">
<div class = "jumbotron">

<table class = "table table-stripped table-bordered table-hover">
    <thead class = "thead">
        <tr class = "warning">
            <th>Medicine Name:</th>
            <th>Show Medicine</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    @foreach($medicines as $medicine)
    <tbody>
        <tr>

            <td> {{$medicine->name}} </td>


            <th><a class="btn btn-success" href="{{ route('medicine.show', $medicine->id ) }}">Show Medicine</a></th>
        </th>
        <th>  <a href = "{{route('medicine.edit',$medicine->id)}}" class = "btn btn-warning">Edit Medicine</a>
        </th>

        <th> <a class="btn btn-outline-danger" href="{{ route('medicine.delete', $medicine->id ) }}">Delete Medicine</a>
        </th>


</tbody>
@endforeach
</table>
</div>
</div>
@endsection
