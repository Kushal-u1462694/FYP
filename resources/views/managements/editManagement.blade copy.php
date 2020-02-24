@extends('layouts.app')
@section('content')

<h3> Create New Prescription</h3>
<div class="alert">

{{-- <a href="{{route('managements.all')}}"  class="btn btn-info float-right"> View All Mangments</a> --}}
</div>
<form action="{{route('managements.edit', $managements->id)}}" method="post">
    @csrf
<div class="form-group">

<input type="text" value="{{$patient->fname}}" disabled>
</div>
<div class="form-group">

    <label for="dob">Patient Date of Birth:</label>
<input type="date" class="form-control"  name= "dob" id="" value = "{{$patients->dob}}">
</div>

<div class="form-group">

<div class="form-group">

</div>

<div class="form-group">
    <label for="">Reference Number:</label>
<input type="text" class="form-control" name="reference" id="" value= "{{$managements->reference}}">
</div>

<div class="form-group">

    <label for="medicines">Medicine Name:</label>
<input type="text" class="form-control"  name = "medicine_id" id="" value = "{{$medicines->id}} {{$medicines->name}}">
</div>

{{-- <div class="form-group">
<select name="medicine_id" id="" class="form-control" value = "{{$medicines->id}} {{$medicines->name}}">
            <option value=""> Select Medicine</option>
            @foreach($medicines as $medicine)
                <option value="1"> medicine1 </option>
                <option value="2"> medicine2</option>
            @endforeach
    </select>
</div> --}}

<div class="form-group">

    <label for="medicines">Medicine Size:</label>
<input type="text" class="form-control"  name = "size" id="" value = "{{$medicines->size}}">
</div>


{{-- <select name="size" id="" class="form-control" value = "{{$medicines->size}}">
    <option value=""> Select Medicine Size</option>
    @foreach($medicines as $medicine)
        <option value="1">  12 </option>
        <option value="2">  2 </option>
    @endforeach
</select>
</div> --}}
<div class="form-group">

    <label for="dosages">Medicine Dosage:</label>
<input type="text" class="form-control"  name = "dosage" id="" value = "{{$medicines->dosage}}">
</div>



{{-- <div class="form-group">
<select name="dosage" id="" class="form-control" value="{{$medicines->dosage}}">
        <label for="">Medicine Dosage:</label>
            <option value=""> Select Medicine Dosage</option>
            @foreach ($medicines as $medicine)
                <option value="1">  12 </option>
                <option value="2">  11 </option>

            @endforeach
    </select>
</div> --}}

<div class="form-group">

    <label for="state">Medicine State:</label>
<input type="text" class="form-control"  name = "state" id="" value = "{{$medicines->state}}">
</div>


{{-- <div class="form-group">
<select name="state" id="" class="form-control" value="{{$medicines->state}}">
        <label for="">Medicine State:</label>
            <option value=""> Select Medicine State</option>
            @foreach ($medicines as $medicine)
                <option value="1">Solid</option>
                <option value="2">Liquid</option>
            @endforeach
    </select>
</div> --}}
{{--
<div class="form-group">
<select name="instruction" id="" class="form-control" value = "{{$medicines->instruction}}">
        <label for="">Medicine Instruction:</label>
            <option value=""> Select Medicine Instruction</option>
            @foreach ($medicines as $medicine)
                <option value="1">  about medicine 1</option>
                <option value="2">  about medicine 2 </option>

            @endforeach
    </select>
</div> --}}
<div class="form-group">

    <label for="instruction">Medicine Instruction:</label>
<input type="text" class="form-control"  name = "instruction" id="" value = "{{$medicines->instruction}}">
</div>

<div class="form-group">
<select name="schedule_id" id="" class="form-control" value = "{{$schedules->id}} {{$schedules->details}}">
            <option value="">  Select Schedule </option>
            @foreach ($schedules as $schedule)
                <option value="1"> about schedule 1</option>
                <option value="2"> about schedule 2</option>

            @endforeach
        </select>
</div>
<button type="submit" class="btn btn-info float-right">Edit Medicine Prescription </button>
</div>
</form>
@endsection
