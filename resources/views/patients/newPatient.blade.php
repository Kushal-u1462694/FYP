@extends('layouts.app')


@section('content')


<h3 class="text-info text-center">Add New Patient </h3>
<form action="{{route('patients.new')}}" method="post">

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
    <label for="">Email:</label>
    <input type="email" class="form-control" name="email" id="email">
</div>


<div class="form-group">
    <label for="">Address:</label>
    <input type="text" class="form-control" name="address" id="address">
</div>

<div class="form-group">
    <label for="">Postcode:</label>
    <input type="text" class="form-control" name="postcode" id="postcode">
</div>

<div class="form-group">
    <label for="">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob">
</div>

<div class="form-group">
    <label for="Carer Name ">Carer Name:</label>
<select name="id"  id="" class="form-control">
            <option value=""> Select Carers</option>
            @foreach($carer as $carers)
<option value="{{$carers->id}}">  {{$carers->fname}}</option>
            @endforeach
    </select>
</div>

<div>
<button type="submit" class="btn btn-info float-right">Add New Patient </button>
</div>
</form>
@endsection
