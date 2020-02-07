@extends('layouts.app')
@section('content')

<h3> All Patients </h3>
<table>
<tr>
<th>First Name:</th>
</tr>
<tr>
@foreach ($carer->patients as $patient)
<td>{{$patient->fname}}</td>

{{-- dd{{$patient}} --}}


@endforeach
@endsection
