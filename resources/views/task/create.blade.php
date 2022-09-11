@extends('layouts.default')

@section('title', 'Create')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label class="form-label fw-bold text-capitalize" for="description">task description</label>
        <input class="form-control" type="text" name="description" id="description" placeholder="Description" required>
        <div class="d-flex justify-content-end mt-2 gap-2">
            <input class="btn btn-success" type="submit" value="Submit">
            <a href="{{ route('tasks.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left-circle pe-2"></i>Back</a>
        </div>
    </form>
@endsection
