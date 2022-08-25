@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form class="d-flex flex-column" style="min-width: 280px;">
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" placeholder="Email">
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" placeholder="Password">
        </div>

        <button type="button" class="btn btn-primary btn-block mb-4">Log in</button>

        <div class="text-center">
            <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </form>
@endsection
