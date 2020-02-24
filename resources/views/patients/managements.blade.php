@extends('layouts.app')

@section('content')



<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Doctor Name:</th>
        <th scope="col">Doctor Surgery:</th>
        <th scope="col">Surgery Address:</th>
        <th scope="col">Surgery Postcode:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>

        {{-- <td>{{$management->doctor->fname}} {{$management->doctor->lname}} </td> --}}
        <td> {{$doctor->fname}} {{$doctor->lname}} </td>
        <td> {{$doctor->surgery->name}}</td>
        <td> {{$doctor->surgery->address}} </td>
        <td> {{$doctor->surgery->postcode}}</td>

      </tr>
    </tbody>
  </table>

@endsection
