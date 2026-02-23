@extends('layouts.edu-admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Course</h5>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
                </div>

                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $course->price }}" required>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $course->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
            </form>

        </div>
    </div>
@endsection
