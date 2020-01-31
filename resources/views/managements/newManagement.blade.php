@extends('layouts.app')
@section('content')

<h3> Create New Management</h3>

<form action="{{route('managements.new')}}" method="post">
    @csrf
<div class="form-group">

    <select name="patient_id" id="" class="form-control">
            <option value=""> Select Patient </option>
            @foreach($patients as $patient)
                <option value="{{$patient->id}}">  {{$patient->fname}}</option>
            @endforeach
    </select>
</div>
<div class="form-group">

    <label for="dob">Patient Date of Birth:</label>
<input type="date" class="form-control"  name = "dob" id="">
</div>

<div class="form-group">
    <select name="doctor_id" id="" class="form-control">
            <option value=""> Select Doctor</option>
            @foreach ($doctors as $doctor)
                <option value="{{$doctor->id}}">  {{$doctor->fname}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Reference Number:</label>
<input type="text" class="form-control" name="reference" id="">
</div>

<div class="form-group">

    <select name="medicine_id" id="" class="form-control">
            <option value=""> Select Medicine</option>
            @foreach($medicines as $medicine)
                <option value="{{$medicine->id}}">  {{$medicine->name}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <select name="schedule_id" id="" class="form-control">
            <option value="">  Select </option>
            @foreach ($schedules as $schedule)
                <option value="{{$schedule->id}}"> {{$schedule->details}} </option>
            @endforeach


        </select>

</div>

{{-- <div class="form-group">

    <select name="size" id=""  class="form-control">
        <label for="">Medicine:</label>
            <option value=""> Select Medicine Size</option>
            @foreach ($medicines as $medicine)
                <option value="{{$medicine->size}}">  {{$medicine->size}}</option>
            @endforeach
    </select>
</div> --}}

{{-- <div class="form-group">

    <select name="dosage" id="" class="form-control">
        <label for="">Medicine Dosage:</label>
            <option value=""> Select Medicine Dosage</option>
            @foreach ($medicines as $medicine)
                <option value="{{$medicine->dosage}}">  {{$medicine->dosage}}</option>
            @endforeach
    </select>
</div> --}}


{{--
<div class="form-group">
    <label for="state">Medicine state:</label>
<input type="text" class="form-control" name="state" id="">
</div> --}}

{{-- <div class="form-group">
    <label for="instruction">Medicine Instructions:</label>
<input type="text" class="form-control" name="instruction" id="">
</div>
<div> --}}


    <button type="submit" class="btn btn-info float-right">Add Medicine Management </button>
</div>
</form>
@endsection
