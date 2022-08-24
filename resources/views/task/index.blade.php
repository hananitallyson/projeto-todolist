@extends('layouts.default')

@section('title', 'Task list')

@section('content')
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item list-group-item-action"><a href="{{ url("task/$task->id") }}">{{ $task->discription }}</a>
        @endforeach
    </ul>
    <p class="mt-2 text-secondary">Total users: {{ count($tasks) }}</p>
@endsection
