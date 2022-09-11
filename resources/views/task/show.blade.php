@extends('layouts.default')

@section('title', "Task")

@section('content')
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Description</span>
            <span class="text-secondary fs-6 fw-light">User: {{ $user->name }}</span>
        </div>
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                {{ $task->description }}
            </div>
            <div class="d-flex gap-2">
                <form action="{{ route('tasks.edit', ['task' => $task]) }}" method="GET">
                    @csrf
                    <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                </form>
                <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
                <button class="btn btn-success"><i class="bi bi-check-circle"></i></button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
        <a href="{{ route('tasks.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left-circle pe-2"></i>Back</a>
    </div>
@endsection
