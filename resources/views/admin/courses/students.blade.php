@extends('layouts.edu-admin')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Students</li>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-center shadow-sm card">
        <div class="text-white card-header bg-primary d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Students List</h5>
        </div>
        <div class="p-0 card-body">
            <table class="table mb-0 table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Image</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr class="align-middle">
                            <!-- صورة الطالب -->
                            <td>
                                <img src="{{ asset('images/users/' . ($student->profile_image ?? 'default.jpg')) }}"
                                    alt="{{ $student->name }}" class="rounded-circle"
                                    style="width:50px;height:50px;object-fit:cover;">
                            </td>

                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone ?? '-' }}</td>
                            <td>{{ $student->address ?? '-' }}</td>
                            <td>
                                @if ($student->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.students.show', $student->id) }}"
                                    class="btn btn-sm btn-info me-1">Show</a>
                                <a href="{{ route('admin.students.delete', $student->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this student?');"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-3 text-center text-muted">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        table tbody tr:hover {
            background-color: #e2f0ff;
        }

        .card-header h5 {
            font-weight: 700;
        }

        .btn-info {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
        }

        .btn-info:hover {
            background-color: #31d2f2;
            border-color: #31d2f2;
        }

        .btn-danger:hover {
            background-color: #dc3545cc;
        }

        /* صورة دائرية صغيرة */
        img.rounded-circle {
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
@endsection
