@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="card text-bg-primary mb-3" style="width: 18rem;">
        <div class="card-header"><i class="bi bi-person-lines-fill pe-1"></i>Users List</div>
        <div class="card-body d-flex flex-column gap-2">
            <span>It shows a list of all user on the database.</span>
            <a class="btn btn-light fw-bold text-primary" href="{{ route('users.index') }}">Enter</a>
        </div>
    </div>
@endsection
