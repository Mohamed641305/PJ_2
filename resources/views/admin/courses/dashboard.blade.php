@extends('layouts.edu-admin')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="text-center text-white card bg-primary">
                <div class="card-body">
                    <h5>Students</h5>
                    <h2>{{ $studentsCount }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center text-white card bg-success">
                <div class="card-body">
                    <h5>Courses</h5>
                    <h2>{{ $coursesCount }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center text-white card bg-warning">
                <div class="card-body">
                    <h5>Active Courses</h5>
                    <h2>{{ $activeCourses }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
