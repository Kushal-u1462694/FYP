
@extends('layouts.app')


@section('content')

<h3> Prescription Managements</h3>

@foreach ($managements as $management)
<div class="card   text-white m-2">
<div class="card-header  bg-info">
    <h3 class="card-title"> ({{$management->patient->fname}})</h3>

</div>

    <div class="card-footer">
    <a href="{{route('management.show' , $management->id)}}" class="btn btn-info float-right"> View Prescription details </a>
    </div>

    <div class="card-footer">
        <a href="{{ route('managements.edit' , $management->id)}}" class="btn btn-info float-right"> Edit Prescription Info </a>
        </div>
        <div class="card-footer">
            <a href="{{ route('managements.delete' , $management->id)}}" class="btn btn-outline-danger float-right"> Delete Prescription </a>
            </div>

</div>

@endforeach
@endsection
