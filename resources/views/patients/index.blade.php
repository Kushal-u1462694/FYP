@extends('layouts.app')

@section('content')

<table class = "table table-stripped table-bordered table-hover">
    <h3> All Patients</h3>

    <thead class = "thead">

<tr>
<th>First Name:</th>
<th>Last Name:</th>
<th>Edit</th>
<th>Delete</th>
<th>Patient Details</th>
<th>Patient Doctor Details</th>

</tr>
</thead>
<tr>
    @foreach ($patients as $patient)
    <td> {{ $patient->fname}}</td>
    <td>{{ $patient->lname}} </td>
<td><a href = "{{route('patient.edit',$patient->id)}}" class = "btn btn-warning">Edit</a></td>
<td>  <a class="btn btn-outline-danger" href="{{ route('patients.delete', $patient->id ) }}">Delete Patient</a>
</td>
<td>  <a class="btn btn-outline-success" href="{{ route('patients.details', $patient->id ) }}">Patient Personal Details</a>

</td>
<td>  <a class="btn btn-outline-info" href="{{ route('patients.managements', $patient->id ) }}">Doctor details</a>

</td>

</tr>
@endforeach
</table>
@endsection
