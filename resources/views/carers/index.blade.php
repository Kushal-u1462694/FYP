@extends('layouts.app')

@section('content')

<h3> All Carers</h3>


@foreach ($carers as $carer)
    <p> {{ $carer->fname}}  {{ $carer->lname}}</p>

@endforeach



@endsection
