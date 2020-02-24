@extends('layouts.app')

@section('content')


<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name:</th>
        <th scope="col">Patient Date of Birth:</th>
        <th scope="col">Patient E Mail Address:</th>
        <th scope="col">Patient Home Address:</th>
        <th scope="col">Patient Postcode:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td> {{$patient->fname}} {{$patient->lname}} </td>
        <td> {{$patient->dob}}</td>
        <td> {{$patient->email}}</td>
        <td> {{$patient->address}}
            <td> {{$patient->postcode}}



      </tr>


    </tbody>
  </table>







@endsection
