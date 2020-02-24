<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>All Carers </title>
</head>
<body>


@extends('layouts.app')

@section('content')


<div class = "container">

<div class = "jumbotron">
{{-- <div class = "col-md-4">
    <form action="/search" method="get">Search </form>
    <div class = "form-group">
        <input type = "search" name = "search" class = "form-control">
        <span class = "form-group-btn">
            <button type = "submit" class = "btn btn-primary">Search </button>
        </span>
    </div>
</form>
</div> --}}

<table class = "table table-stripped table-bordered table-hover">
    <thead class = "thead">
        <tr class = "warning">
            <h3> Carers </h3>
            <th>First Name:</th>
            <th>Last Name:</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Show Patients <th>
        </tr>
    </thead>
    @foreach($carers as $carer)
    <tbody>
        <tr>

            <td> {{$carer->fname}} </td>
            <td> {{$carer->lname}} </td>


            <th><a href = "{{route('carers.edit',$carer->id)}}" class = "btn btn-primary">Edit</a></th>
        </th>
        <th>  <a class="btn btn-outline-danger" href="{{ route('carers.delete', $carer->id ) }}">Delete Carer</a>
        </th>

        <th>  <a class="btn btn-outline-success" href="{{ route('carers.patients', $carer->id ) }}">Show Patients</a>
        </th>


</tbody>
@endforeach
</table>
</div>
</div>
@endsection

</body>

</html>



{{-- <h3> All Carers</h3>
<table>
<tr>
<th>First Name:</th>
<th>Last Name:</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
    @foreach ($carers as $carer)
    <td> {{ $carer->fname}}</td>
    <td>{{ $carer->lname}}</td>
<td><a href = "{{route('carers.edit',$carer->id)}}" class = "btn btn-warning">Edit</a></td>
<td>  <a class="btn btn-outline-danger" href="{{ route('carers.delete', $carer->id ) }}">Delete Carer</a>
    <td>  <a class="btn btn-outline-success" href="{{ route('carers.patients', $carer->id ) }}">Show Patients</a>
</td>

</tr>
@endforeach
</table>
@endsection --}}

{{-- <p> {{ $carer->fname}}  {{ $carer->lname}}</p> --}}
