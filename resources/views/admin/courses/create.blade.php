@extends('layouts.edu-admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add New Course</h5>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.courses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>

            </form>

        </div>
    </div>
@endsection
