@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="shadow card">
                    <div class="text-center text-white card-header bg-primary">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>

                            <!-- حقل رفع الصورة -->
                            <div class="mb-3">
                                <label for="profile_image" class="form-label">Profile Image</label>
                                <input id="profile_image" type="file"
                                    class="form-control @error('profile_image') is-invalid @enderror" name="profile_image"
                                    accept="image/*" onchange="previewImage(event)">
                                @error('profile_image')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- عرض معاينة الصورة -->
                            <div class="mb-3 text-center">
                                <img id="image_preview" src="#" alt="Preview"
                                    style="display:none; width:100px; height:100px; object-fit:cover; border-radius:50%;">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Register</button>

                            <div class="mt-3 text-center">
                                <span>Already have an account? <a href="{{ route('login') }}">Login here</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- سكريبت معاينة الصورة -->
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image_preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
