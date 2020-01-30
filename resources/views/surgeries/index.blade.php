@extends('layouts.app')

@section('content')

<h3> All Surgeries</h3>
<table>
<tr>
<th>Name:</th>
<th>Address:</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
    @foreach ($surgeries as $surgery)
    <td> {{ $surgery->name}}</td>
    <td>{{ $surgery->address}}</td>
<td><a href = "{{route('surgeries.edit',$surgery->id)}}" class = "btn btn-warning">Edit</a></td>
<td>  <a class="btn btn-outline-danger" href="{{ route('surgeries.delete', $surgery->id ) }}">Delete Carer</a>
</td>

</tr>
@endforeach
</table>
@endsection
