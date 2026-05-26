@extends('layouts.edu-admin')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
    <li class="breadcrumb-item active">{{ $student->name }}</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Student Details</h5>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $student->id }}</p>
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Phone:</strong> {{ $student->phone_number ?? '-' }}</p>
            <p><strong>Address:</strong> {{ $student->address ?? '-' }}</p>
            <p><strong>Status:</strong> {{ ucfirst($student->status ?? 'active') }}</p>

            <div class="mt-3">
                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-primary me-2">Edit Student</a>
                <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
