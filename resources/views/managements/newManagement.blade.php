@extends('layouts.app')
@section('content')

<h3> Create New Prescription</h3>
<div class="alert">

{{-- <a href="{{route('managements.all')}}"  class="btn btn-info float-right"> View All Mangments</a> --}}
</div>
<form action="{{route('managements.new')}}" method="post">
    @csrf
<div class="form-group">
    <label for="Patient Name">Patient Name:</label>
    <select name="patient_id" id="" class="form-control">
            <option value=""> Select Patient </option>
            @foreach($patients as $patient)
                <option value="{{$patient->id}}">  {{$patient->fname}} {{$patient->lname}} </option>
            @endforeach
    </select>
</div>
<div class="form-group">

    <label for="dob">Patient Date of Birth:</label>
<input type="date" class="form-control"  name = "dob" id="">
</div>

<div class="form-group">
    <label for="Patient Address">Patient Address:</label>

    <select name="address" id="" class="form-control">
            <option value=""> Select Patient Address</option>
            @foreach ($patients as $patient)
                <option value="{{$patient->address}}">  {{$patient->address}}</option>
            @endforeach
    </select>

<div class="form-group">
    <label for="doctor name">Doctor Name:</label>
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
    <label for="medicine name">Medicine Name:</label>
    <select name="medicine_id" id="" class="form-control">
            <option value=""> Select Medicine</option>
            @foreach($medicines as $medicine)
                <option value="{{$medicine->id}}">  {{$medicine->name}}</option>
            @endforeach
    </select>
</div>
<div class="form-group">
    <label for="size">Medicine Sizes:</label>
<select name="size" id="" class="form-control">
    <option value=""> Select Medicine Size</option>
    @foreach($medicines as $medicine)
        <option value="{{$medicine->size}}">  {{$medicine->size}}</option>
    @endforeach
</select>
</div>

<div class="form-group">
    <label for="dosage">Medicine Dosages:</label>
    <select name="dosage" id="" class="form-control">
        <label for="">Medicine Dosage:</label>
            <option value=""> Select Medicine Dosage</option>
            @foreach ($medicines as $medicine)
                <option value="{{$medicine->dosage}}">  {{$medicine->dosage}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="state">Medicine States:</label>
    <select name="state" id="" class="form-control">
        <label for="">Medicine State:</label>
            <option value=""> Select Medicine State</option>
            @foreach ($medicines as $medicine)
                <option value="{{$medicine->state}}">  {{$medicine->state}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="instruction">Medicine Instruction:</label>
    <select name="instruction" id="" class="form-control">
        <label for="">Medicine Instruction:</label>
            <option value=""> Select Medicine Instruction</option>
            @foreach ($medicines as $medicine)
                <option value="{{$medicine->instruction}}">  {{$medicine->instruction}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="schedule">Schedules:</label>
    <select name="schedule_id" id="" class="form-control">
            <option value="">  Select Schedule </option>
            @foreach ($schedules as $schedule)
                <option value="{{$schedule->id}}"> {{$schedule->details}} </option>
            @endforeach
        </select>
</div>
<button type="submit" class="btn btn-info float-right">Add Medicine to Prescription Management </button>
</div>
</form>
@endsection

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



