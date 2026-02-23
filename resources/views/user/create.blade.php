@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="m-auto mt-5 col-md-8">



                <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="user_img" class="mb-3 form-control">
                    @error('user_img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="name" class="mb-3 form-control" placeholder="Name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="email" name="email" class="mb-3 form-control" placeholder="E-mail">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="password" name="password" class="mb-3 form-control" placeholder="Password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="phone_number" class="mb-3 form-control" placeholder="Phone Number">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="address" class="mb-3 form-control" placeholder="Address">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="submit" class="btn btn-success d-block w-100" value="Create New User">

                </form>
            </div>
        </div>
    </div>
@endsection
