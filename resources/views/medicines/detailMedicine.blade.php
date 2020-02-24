@extends('layouts.app')


@section('content')

<h3> Details of Medicine </h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Medicine Name</th>
        <th scope="col">Medicine Size</th>
        <th scope="col">Medicine Dosage</th>
        <th scope="col">Medicine State</th>
        <th scope="col">Medicine Instructions</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($medicines as $medicine)
        <th scope="row">{{$medicine->id}}</th>

        <td>{{$medicine->name}}</td>
        <td> {{$medicine->size}} </td>
        <td> {{$medicine->dosage}} </td>
        <td> {{$medicine->state}} </td>
        <td> {{$medicine->instruction}} </td>
    </tr>

        @endforeach
        @endsection

    </tbody>
  </table>
