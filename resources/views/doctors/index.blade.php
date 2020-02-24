@extends('layouts.app')

@section('content')
<h3> All Doctors</h3>
<div class = "container">
    <div class = "jumbotron">
    <table class = "table table-stripped table-bordered table-hover">
        <thead class = "thead">
            <tr class = "warning">
            </tr>
        </thead>

<tr>
<th>First Name:</th>
<th>Last Name:</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
    @foreach ($doctors as $doctor)
    <td> {{ $doctor->fname}} </td>
    <td>{{ $doctor->lname}} </td>
    <td><a href = "{{route('doctor.edit',$doctor->id)}}" class = "btn btn-warning">Edit Doctor</a></td>
    <td>  <a class="btn btn-outline-danger" href="{{ route('doctor.delete', $doctor->id ) }}">Delete Doctor</a>
</td>
</tr>
@endforeach
</table>
</div>
</div>
@endsection
