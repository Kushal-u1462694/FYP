@extends('layouts.app')


@section('content')


<h3 class="text-info text-center">Add New Medicine</h3>
<form action="{{route('medicines.new')}}" method="post">

    @csrf
<div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
</div>

<div class="form-group">
    <label for=""> Select Size</label>
    <select name="size" id="size" class="form-control">
        <option value="1">size1</option>
        <option value="2">size2</option>
    </select>

</div>


<div class="form-group">
    <label for=""> Select Dosage</label>
    <select name="dosage" id="dosage" class="form-control">
        <option value="1">dosage1</option>
        <option value="2">dosage2</option>
    </select>

</div>

<div class="form-group">
    <label for="">Medicine Instruction:</label>
    <input type="text" class="form-control" name="instruction" id="instruction">
</div>

<div class="form-group">
    <label for=""> Select State</label>
    <select name="state" id="state" class="form-control">
        <option value="1">state1</option>
        <option value="2">state2</option>
    </select>

<div>
<button type="submit" class="btn btn-info float-right">Add New Surgery </button>
</div>
</form>
@endsection
