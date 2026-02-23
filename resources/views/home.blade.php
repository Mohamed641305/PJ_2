@extends('layouts.edu-admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="my-5 text-center card">
                    <div class="card-header fs-4 fw-semibold">
                        Details of Users: <span class="badge text-bg-primary ">{{ $user->count() }}</span>
                        <a href="{{ route('user.create') }}" class="px-2 py-1 btn btn-success float-end btn-md">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <h4 class="text-center alert alert-success">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Profile_img</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ $item->user_img ? asset('images/users/' . $item->user_img) : asset('images/users/default.jpg') }}"
                                                alt="Profile Image" class="img-fluid rounded-circle" width="40">
                                        </td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href={{ route('user.show', $item->id) }} class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href={{ route('user.edit', $item->id) }} class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href={{ route('user.delete', $item->id) }} class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
