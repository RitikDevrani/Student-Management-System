@extends('layouts.app')

@section('content')
<a href="{{ route('students.create') }}" class="btn btn-success mb-3">+ Add Student</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Age</th><th>Actions</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->age }}</td>
        <td>
            <a href="{{ route('students.edit',$student->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $students->links() }}
@endsection
