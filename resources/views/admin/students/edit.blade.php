@extends('layouts.edu-admin')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
    <li class="breadcrumb-item active">Edit {{ $student->name }}</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Student</h5>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.students.update', $student->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $student->name) }}" required>
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $student->email) }}" required>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input id="phone_number" name="phone_number" type="text"
                        class="form-control @error('phone_number') is-invalid @enderror"
                        value="{{ old('phone_number', $student->phone_number) }}" required>
                    @error('phone_number')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input id="address" name="address" type="text"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address', $student->address) }}">
                    @error('address')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="active" {{ old('status', $student->status) === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="block" {{ old('status', $student->status) === 'block' ? 'selected' : '' }}>Block</option>
                    </select>
                    @error('status')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
