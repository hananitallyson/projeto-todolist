@extends('layouts.default')

@section('title', 'Create')

@section('content')
    <form class="" action="task/store">
        @csrf
        <label class="form-label fw-bold text-capitalize" for="task">task description</label>
        <input class="form-control" type="text" id="task" placeholder="Description">
        <div class="d-flex justify-content-end">
            <input class="btn btn-primary px-4 mt-2" type="submit" value="Submit">
        </div>
    </form>
@endsection
