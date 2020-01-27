@extends('layouts.app')


@section('content')


<h3 class="text-info text-center">Edit Surgery</h3>
<form action="{{route('surgeries.edit', $surgery->id)}}" method="post">

    @csrf
<div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" name="name" id="name" value = "{{$surgery->name}}">
</div>

<div class="form-group">
    <label for="">Address:</label>
    <input type="text" class="form-control" name="address" id="address" value = "{{$surgery->address}}">
</div>


<div class="form-group">
    <label for="">Postcode:</label>
    <input type="postcode" class="form-control" name="postcode" id="postcode" value="{{$surgery->postcode}}">
</div>
<div>
<button type="submit" class="btn btn-info float-right">Edit Surgery </button>
</div>
</form>
@endsection
