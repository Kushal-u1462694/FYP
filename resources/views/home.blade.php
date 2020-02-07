@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}


                        </div>
                    @endif
                    {{-- {{dd(Auth::user()->roles)}} --}}
 @foreach (Auth::user()->roles as $role)
   <p>   You are logged in as {{$role->name}}! </p>
 @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
