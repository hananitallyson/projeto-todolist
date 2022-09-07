@extends('layouts.default')

@section('title', "Edit task $task->id")

@section('content')
    <form action="{{ route('tasks.update', ['task' => $task, 'id' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="description" class="fw-bolder label mb-2">Description</label>
            <input class="form-control" type="text" name="description" id="description" value="{{ $task->description }}">
        </div>
        <div class="mt-3">
            <div class="d-flex justify-content-end mt-2 gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square me-2"></i>Submit</button>
                <a href="{{ route('tasks.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left-circle pe-2"></i>Back</a>
            </div>
        </div>
    </form>
@endsection
