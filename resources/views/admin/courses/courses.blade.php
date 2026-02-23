@extends('layouts.edu-admin')

@section('content')
    <h2 class="mb-3">Courses List</h2>

    <a href="{{ route('admin.courses.create') }}" class="mb-3 btn btn-success">+ Add New Course</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="shadow-sm card">
        <div class="text-white card-header bg-primary d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Courses List</h5>
        </div>
        <div class="p-0 card-body">
            <table class="table mb-0 text-center table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr class="align-middle">
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->title }}</td>
                            <td>${{ number_format($course->price, 2) }}</td>
                            <td>
                                @if ($course->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.courses.edit', $course->id) }}"
                                    class="btn btn-sm btn-primary me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('admin.courses.delete', $course->id) }}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this course?');">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-3 text-center text-muted">No courses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        /* Hover effect like Students table */
        table tbody tr:hover {
            background-color: #e2f0ff;
        }

        .card-header h5 {
            font-weight: 700;
        }

        /* زر تعديل وحذف */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger:hover {
            background-color: #dc3545cc;
        }

        /* Badge status */
        .badge {
            padding: 0.35em 0.65em;
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 0.35rem;
        }
    </style>
@endsection
