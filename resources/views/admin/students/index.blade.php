<!-- resources/views/admin/students/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>List of Students</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->class }}</td>
                <td>
                    <!-- Example of an action -->
                    <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-info">View Profile</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
