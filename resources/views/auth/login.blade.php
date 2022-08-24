@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="post" class="d-flex flex-column gap-3">
        @csrf
        <div>
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <input type="submit" value="Login" class="btn btn-primary"></input>
        <a class="text-center" href="{{ url('/') }}">Don't have an account?</a>
    </form>
@endsection
