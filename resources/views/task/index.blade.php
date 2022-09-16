@extends('layouts.default')

@section('title', 'Task list')

@section('content')
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-secondary m-0">Total tasks: {{ count($tasks) }}</p>
                <a href="{{ route('tasks.create') }}" class="btn btn-success text-uppercase"><i class="bi bi-plus-circle me-2"></i>Create</a>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($tasks as $task)
                    @if ($task->checked)
                        <li class="list-group-item list-group-item-action"><a class="text-success" href="{{ url("tasks/$task->id") }}">{{ $task->description }}</a>
                    @else
                        <li class="list-group-item list-group-item-action"><a href="{{ url("tasks/$task->id") }}">{{ $task->description }}</a>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
