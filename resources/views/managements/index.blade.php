
@extends('layouts.app')


@section('content')

<h3> Managements</h3>

<table>
    <tr>Patient</tr>

    @foreach ($patients->management as $managements) {
        <th> {{$managements->lname}} </th>

    }
</table>

@endforeach
@endsection
