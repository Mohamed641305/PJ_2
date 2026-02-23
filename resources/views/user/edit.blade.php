@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="m-auto mt-5 col-md-8">
                <form method="post" action="{{ route('user.update', $result->id) }}" enctype="multipart/form-data">
                    @csrf

                    @error('user_img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="file" name="user_img" class="mb-3 form-control">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="name" class="mb-3 form-control" placeholder="Name"
                        value="{{ $result->name }}">

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" class="mb-3 form-control" placeholder="E-mail"
                        value="{{ $result->email }}">

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" class="mb-3 form-control" placeholder="Password">

                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="phone_number" class="mb-3 form-control" placeholder="Phone Number"
                        value="{{ $result->phone_number }}">

                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="address" class="mb-3 form-control" placeholder="Address"
                        value="{{ $result->address }}">

                    <input type="submit" class="btn btn-success d-block w-100" value="Update User">

                </form>
            </div>
        </div>
    </div>
@endsection
