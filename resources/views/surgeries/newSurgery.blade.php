@extends('layouts.app')

@section('content')


<h3 class="text-info text-center">Add New Surgery</h3>
<form action="{{route('surgeries.new')}}" method="post">

    @csrf
<div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
</div>

<div class="form-group">
    <label for="">Address:</label>
    <input type="text" class="form-control" name="address" id="address">
</div>


<div class="form-group">
    <label for="">Postcode:</label>
    <input type="text" class="form-control" name="postcode" id="postcode">
</div>
<div>
<button type="submit" class="btn btn-info float-right">Add New Surgery </button>
</div>
</form>
@endsection
