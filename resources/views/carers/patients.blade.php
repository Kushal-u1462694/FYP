@extends('layouts.app')
@section('content')

<h3> All Patients </h3>

{{-- @foreach ($carer->patients as $patient) --}}
{{-- <td>{{$patient->fname}}</td>
<td> {{$patient->lname}} </td> --}}

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">E mail Address</th>
        <th scope="col">Patient Address</th>
        <th scope="col">Patient Postcode</th>
        <th scope="col">Patient Date of Birth:</th>
        <th scope="col">Show Prescription</th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        @foreach ($carer->patients as $patient)

        <td>{{$patient->fname}}</td>
        <td> {{$patient->lname}} </td>
        <td> {{$patient->email}} </td>
        <td> {{$patient->address}} </td>
        <td> {{$patient->postcode}} </td>
        <td> {{$patient->dob}} </td>
        <td>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Related prescriptions
          </button>
        </td>
        @endforeach
        @endsection
    </tbody>
  </table>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{$patient->fname}}'s Mangements </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @foreach($patient->managements as $mangement)
<div class="alert">

        <h3 class="card-title"> reference:  {{$mangement->reference}}</h3>
        <span> Doctor: Dr.  {{$mangement->doctor->fname}}</span>
        <span> Doctor: Dr.  {{$mangement->patient->fname}}</span>
</div>

          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
