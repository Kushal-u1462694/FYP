@extends('layouts.app');

@section('content');

<div class = "row">
<div class = "col-md-12">
<h3> Edit Patients </h3>
<form  method="post" action ="{{route('patient.edit',$patient->id)}}">

@csrf

<div class="form-group">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="fname" id="fname" value = "{{$patient->fname}}">
</div>

<div class="form-group">
    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="lname" id="lname" value = "{{$patient->lname}}">
</div>


<div class="form-group">
    <label for="">Email:</label>
    <input type="email" class="form-control" name="email" id="email" value = "{{$patient->email}}">
</div>


<div class="form-group">
    <label for="">Address:</label>
    <input type="text" class="form-control" name="address" id="address" value = "{{$patient->address}}">
</div>

<div class="form-group">
    <label for="">Postcode:</label>
    <input type="text" class="form-control" name="postcode" id="postcode" value = "{{$patient->postcode}}">
</div>

<div class="form-group">
    <label for="">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob" value ="{{$patient->dob}}">
</div>

<div class="form-group">
    <label for=""> Select Carer</label>
    <select name="carer_id" id="" class="form-control" value = "{{$patient->carer_id}}">
        <option value="1">Carer1</option>
        <option value="2">Carer2</option>
    </select>

</div>
<div>
<button type="submit" class="btn btn-info float-right" value = "Edit" >Edit Patient </button>
</div>


</form>
</div>
</div>


@endsection
