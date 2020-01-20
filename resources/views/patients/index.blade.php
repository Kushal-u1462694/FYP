@extends('layouts.app')

@section('content')

<h3> All Patients</h3>


@foreach ($patients as $patient)
<p> {{ $patient->fname}}  {{ $patient->lname}}     Carer : {{$patient->Carer->lname}}</p>

@endforeach

@endsection
