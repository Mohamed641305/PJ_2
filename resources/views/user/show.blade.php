@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="m-auto col-md-10">
                <h4 class="mt-5 mb-3 text-center">Details of User: <span
                        class="badge text-bg-primary">{{ $result->id }}</span>
                </h4>
                <table class="table text-center table-dark justify-content-center align-items-center">
                    <thead>
                        <tr>
                            <th>Profile_img</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created_at</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ $result->user_img ? asset('images/users/' . $result->user_img) : asset('images/users/default.jpg') }}"
                                    alt="Profile Image" class="img-fluid rounded-circle" width="40">
                            </td>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->name }}</td>
                            <td>{{ $result->email }}</td>
                            <td>{{ $result->phone_number }}</td>
                            <td>{{ $result->address }}</td>
                            <td>{{ $result->role }}</td>
                            <td>{{ $result->status }}</td>
                            <td>{{ $result->created_at }}</td>
                            <td>
                                <a href={{ route('home') }} class="btn btn-success">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
