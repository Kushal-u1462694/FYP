@extends('layouts.app')

@section('content')


<h3 class="text-info text-center">Edit Doctors </h3>
<form action="{{route('doctors.edit', $doctor->id)}}" method="post">

    @csrf
<div class="form-group">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="fname" id="fname" value = "{{$doctor->fname}}">
</div>

<div class="form-group">
    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="lname" id="lname" value="{{$doctor->lname}}">
</div>

<div class="form-group">
    <label for="">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob" value= "{{$doctor->dob}}">
</div>

<div class="form-group">
    <label for=""> Select Surgery</label>
    <select name="surgery_id" id="" class="form-control" value = "{{$doctor->surgery_id}}">
        <option value="1">Surgery1</option>
        <option value="2">Surgery2</option>
    </select>

</div>
<div>
<button type="submit" class="btn btn-info float-right">Edit Doctor</button>
</div>
</form>
@endsection
