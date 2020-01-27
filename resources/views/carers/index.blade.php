@extends('layouts.app')

@section('content')

<h3> All Carers</h3>
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
</td>

</tr>
@endforeach
</table>
@endsection



{{-- <p> {{ $carer->fname}}  {{ $carer->lname}}</p> --}}
