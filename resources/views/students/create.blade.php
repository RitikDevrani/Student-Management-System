@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Course</label>
        <input type="text" name="course" class="form-control">
    </div>
    <div class="mb-3">
        <label>Age</label>
        <input type="number" name="age" class="form-control">
    </div>
    <button class="btn btn-success">Save</button>
</form>
@endsection
