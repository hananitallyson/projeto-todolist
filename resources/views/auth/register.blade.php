@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <form class="d-flex flex-column" style="min-width: 280px;">
        @csrf
        <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Create account</button>

        <div class="text-center">
            <p>Alredy a member? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </form>
@endsection
