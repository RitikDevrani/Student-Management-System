<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        $students = Student::paginate(5);
        return view('students.index', compact('students'));
    }

    // Show create form
    public function create() {
        return view('students.create');
    }

    // Store student
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:students',
            'course' => 'required',
            'age' => 'required|integer|min:10',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student Added Successfully!');
    }

    // Edit form
    public function edit(Student $student) {
        return view('students.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, Student $student) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'course' => 'required',
            'age' => 'required|integer|min:10',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student Updated Successfully!');
    }

    // Delete student
    public function destroy(Student $student) {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student Deleted Successfully!');
    }
}
