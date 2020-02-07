@extends('layouts.app')


@section('content')
<table>
<thead>
<th>First Name:</th>
<th> Last Name:</th>
<th>E mail</th>
<th>Author</th>
<th>Admin </th>
<th></th>

</thead>
<tbody>

    @foreach($users as $user)

    <tr>
<form action="{{ route('admin.assign') }}" method="post"></form>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->email}} <input type="hidden" name="email" value = "{{$user->email}}"></td>
<td></td>
<td></td>
<td></td>
{{csrf_field() }}
<td> <button type="submit"> Roles </button> </td>

</tr>
@endforeach
</tbody>
</table>


@endsection
