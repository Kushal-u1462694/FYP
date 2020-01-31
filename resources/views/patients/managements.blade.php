@extends('layouts.app')

@section('content')


@foreach ($managements as $management)

<p>{{$management->reference}}</p>
<p>{{$management->doctor->fname}}</p>

@endforeach
@endsection
