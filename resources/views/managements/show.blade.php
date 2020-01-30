
@extends('layouts.app')

@section('content')

<h3> Managements</h3>

<table>
    <tr>Patient</tr>

<p> {{$patient->}}</p>
    @foreach ($patient as $patients) {
        <th> {{$patients->fname}} </th>
    }

</table>

@endforeach
@endsection
