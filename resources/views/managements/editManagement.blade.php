@extends('layouts.app')
@section('content')

<h3> Create New Prescription</h3>

<form action="{{route('managements.edit', $management->id)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="patient_name"> Patient Name</label>
        <input type="text" value="{{$patient->fname}}  {{$patient->lname}}" name="patient_name"  id="patient_name"disabled>
        </div>

    <div class="form-group">
    <label for="patient_dob"> Patient Date of Birth</label>
    <input type="text" value="{{$patient->dob}}" name="dob"  id="dob"disabled>
    </div>

        <div class="form-group">
            <label for="patient_address"> Patient Address</label>
            <input type="text" value="{{$patient->address}}" name="address"  id="address"disabled>
            </div>

                    <div class="form-group">
                        <label for="doctor_name"> Doctor Name:</label>
                    <input type="text" value="{{$doctor->fname}} {{$doctor->lname}}" name="doctor_name"  id="doctor_name"disabled>
                        </div>

                        <div class="form-group">
                            <label for="reference numer">Reference Number:</label>
                        <input type="text" value= "{{$management->reference}}"name="reference" id="reference" disabled>
                        </div>

                        <div class="form-group">
                            <label for="medicine name">Medicine Name:</label>
                        <select name="medicine_name" value = "{{$management->id}}" id="medicine_name" class="form-control">
                                    <option value=""> Select Medicine</option>
                                    @foreach($medicine as $medicines)
                        <option value="{{$medicines->id}}">  {{$medicines->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="medicine Size">Medicine Size:</label>
                        <select name="medicine_size" value = "{{$management->id}}" id="medicine_size" class="form-control">
                                    <option value=""> Select Medicine Size</option>
                                    @foreach($medicine as $medicines)
                        <option value="{{$medicines->id}}">  {{$medicines->size}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Medicine Dosage">Medicine Dosage:</label>
                        <select name="medicine_dosage" value = "{{$management->id}}" id="medicine_dosage" class="form-control">
                                    <option value=""> Select Medicine Dosage</option>
                                    @foreach($medicine as $medicines)
                        <option value="{{$medicines->id}}">  {{$medicines->dosage}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Medicine Dosage">Medicine State:</label>
                        <select name="medicine_dosage" value = "{{$management->id}}" id="medicine_state" class="form-control">
                                    <option value=""> Select Medicine State</option>
                                    @foreach($medicine as $medicines)
                        <option value="{{$medicines->id}}">  {{$medicines->state}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="medicine Instruction">Medicine Instruction:</label>
                            <textarea>
                        {{$medicines->instruction}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="Schedule Date">Prescription Prescribed Date and Time To:</label>
                        <input type="datetime-local" value= "{{$schedule->to}}"name="reference_to" id="reference_to">
                        </div>
                        <div class="form-group">
                            <label for="Schedule Date">Prescription Prescribed Date and Time From:</label>
                        <input type="datetime-local" value= "{{$schedule->from}}"name="reference_from" id="reference_from">
                        </div>
                            <div class="form-group">
                            <label for="schedule_details">Notes:</label>
                            <textarea>
                                {{$schedule->details}}
                                    </textarea>
        </select>
</div>

<div>
    <button type="submit" class="btn btn-info float-center" value = "Edit" >Update Prescription </button>
    </div>
</form>
@endsection
