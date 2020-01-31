@extends('layouts.app')

@section('content')


@foreach ($medicines as $medicine)

<p>{{$medicine->name}}</p>

@endforeach




@endsection
