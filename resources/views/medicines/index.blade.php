@extends('layouts.app')

@section('content')

<h3> All Medicines</h3>
<table>
<tr>
<th>First Name:</th>
<th>Last Name:</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
    @foreach ($medicines as $medicine)
    <td> {{ $medicine->name}}</td>
    <td>{{ $medicine->dosage}}</td>
<td><a href = "{{route('medicine.edit',$medicine->id)}}" class = "btn btn-warning">Edit</a></td>
<td>  <a class="btn btn-outline-danger" href="{{ route('medicine.delete', $medicine->id ) }}">Delete Patient</a>
</td>

</tr>
@endforeach
</table>
@endsection
