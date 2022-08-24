@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <form action="/register" method="post" class="d-flex flex-column gap-3">
        @csrf
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <input type="submit" value="Register" class="btn btn-primary"></input>
        <a class="text-center" href="{{ url('/login') }}">Already have an account?</a>
    </form>
@endsection
