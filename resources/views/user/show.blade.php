@extends('layouts.default')

@section('title', "$user->name")

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ url()->previous() }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left-circle pe-2"></i>Back</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right pe-2"></i></i>Logout</button>
        </form>
    </div>
@endsection
