@extends('layouts.app');

@section('content');

<div class = "row">
<div class = "col-md-12">
<h3> Edit Carers </h3>
<form  method="post" action ="{{route('carer.edit',$carer->id)}}">

@csrf

<div class="form-group">
    <label for="">First Name:</label>
    <input type="text" class="form-control" name="fname" id="fname" value = "{{$carer->fname}}">
</div>

<div class="form-group">
    <label for="">Last Name:</label>
    <input type="text" class="form-control" name="lname" id="lname" value = "{{$carer->lname}}">
</div>

<div class="form-group">
    <label for="">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob" value ="{{$carer->dob}}">
</div>
<div>
<button type="submit" class="btn btn-info float-right" value = "Edit" >Edit Carer </button>
</div>
</form>
</div>
</div>
@endsection
