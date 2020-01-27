@extends('layouts.app')

@section('content')


<h3 class="text-info text-center">Add New Doctor </h3>
<form action="{{route('doctors.new')}}" method="post">

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

<div class="form-group">
    <label for=""> Select Surgery</label>
    <select name="surgery_id" id="" class="form-control">
        <option value="1">Surgery1</option>
        <option value="2">Surgery2</option>
    </select>

</div>
<div>
<button type="submit" class="btn btn-info float-right">Add New Doctor</button>
</div>
</form>
@endsection
