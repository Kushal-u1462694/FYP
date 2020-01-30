@extends('layouts.app')


@section('content')

<h3> Details of Medicine </h3>
<table>
<tr>
<th>Medicine Name:</th>
<th>Medicine Size:</th>
<th>Medicine Dosage:</th>
<th>Medicine State:</th>
</tr>
<tr>
@foreach ($medicines as $medicine)
    <td>{{$medicine-> name}}</td>
    <td>{{$medicine-> size}}</td>
    <td>{{$medicine-> dosage}}</td>
    <td>{{$medicine-> state}}</td>
</tr>
@endforeach
</table>
@endsection
