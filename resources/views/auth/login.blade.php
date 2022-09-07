@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form action="login" class="d-flex flex-column" style="min-width: 280px;" method="post">
        @csrf
        <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" placeholder="Email" autofocus required>
        </div>

        <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

        <div class="text-center">
            <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </form>
@endsection
