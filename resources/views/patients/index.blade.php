@extends('layouts.app')

@section('content')

<h3> All Patients</h3>
<table>
<tr>
<th>First Name:</th>
<th>Last Name:</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
    @foreach ($patients as $patient)
    <td> {{ $patient->fname}}</td>
    <td>{{ $patient->lname}} </td>
<td><a href = "{{route('patient.edit',$patient->id)}}" class = "btn btn-warning">Edit</a></td>
<td>  <a class="btn btn-outline-danger" href="{{ route('patients.delete', $patient->id ) }}">Delete Patient</a>
</td>
<td>  <a class="btn btn-outline-danger" href="{{ route('patients.medicines', $patient->id ) }}">Show Medicine</a>

</td>
<td>  <a class="btn btn-outline-danger" href="{{ route('patients.managements', $patient->id ) }}">Show Management</a>

</td>

</tr>
@endforeach
</table>
@endsection
