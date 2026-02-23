@extends('layouts.edu-admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Courses List</h5>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>

                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ ucfirst($course->status) }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
