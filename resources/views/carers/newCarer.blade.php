@extends('layouts.app')


@section('content')


<h3 class="text-info text-center">Add New Carer </h3>
<form action="{{route('carers.new')}}" method="post">

    @csrf
<div class="form-group">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="fname" id="fname">
</div>

<div class="form-group">
    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="lname" id="lname">
</div>

<div class="form-group">
    <label for="">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob">
</div>
<div>
<button type="submit" class="btn btn-info float-right">Add New Carer </button>
</div>
</form>
@endsection
