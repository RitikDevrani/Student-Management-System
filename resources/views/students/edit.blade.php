@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('students.update',$student->id) }}">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Course</label>
        <input type="text" name="course" value="{{ $student->course }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Age</label>
        <input type="number" name="age" value="{{ $student->age }}" class="form-control">
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
