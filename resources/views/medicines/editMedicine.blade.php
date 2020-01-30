@extends('layouts.app')


@section('content')


<h3 class="text-info text-center">Edit Medicine</h3>
<form  method="post" action ="{{route('medicines.edit',$medicine->id)}}">
    @csrf
<div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" name="name" id="name" value = "{{$medicine->name}}">
</div>

<div class="form-group">
    <label for=""> Select Size</label>
    <select name="size" id="size" class="form-control" value = "{{$medicine->size}}">
        <option value="1">medicine1</option>
        <option value="2">medicine2</option>
    </select>

</div>


<div class="form-group">
    <label for=""> Select Dosage</label>
    <select name="dosage" id="dosage" class="form-control" value = "{{$medicine->dosage}}">
        <option value="1">dosage1</option>
        <option value="2">dosage2</option>
    </select>

</div>

<div class="form-group">
    <label for="">Medicine Instruction:</label>
    <input type="text" class="form-control" name="instruction" id="instruction" value = "{{$medicine->instruction}}">
</div>

<div class="form-group">
    <label for=""> Select State</label>
    <select name="state" id="state" class="form-control" value = "{{$medicine->state}}">
        <option value="1">state1</option>
        <option value="2">state2</option>
    </select>

<div>
<button type="submit" class="btn btn-info float-right">Edit Medicine</button>
</div>
</form>
@endsection
