<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}

    <!-- Navbar Start -->
    <nav class="p-0 bg-white shadow navbar navbar-expand-lg navbar-light sticky-top">
        <a href="{{ route('welcome') }}" class="px-4 navbar-brand d-flex align-items-center px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="p-4 navbar-nav ms-auto p-lg-0">

                <!-- Home يظهر دايماً -->
                <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>

                <!-- باقي الصفحات تظهر فقط بعد تسجيل الدخول -->
                @auth
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('courses') }}" class="nav-item nav-link">Courses</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="m-0 dropdown-menu fade-down">
                            <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                @endauth

            </div>

            <div class="px-4 d-none d-lg-block">
                @guest
                    <div class="dropdown">
                        <button class="py-4 btn btn-primary px-lg-5 dropdown-toggle" type="button" id="authDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="authDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="dropdown">
                        <button class="py-4 btn btn-primary px-lg-5 dropdown-toggle" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            @if (Auth::user()->role === 'admin')
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer Start -->
    <div class="pt-5 mt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <!-- Gallery -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4"><img class="p-1 img-fluid bg-light" src="img/course-1.jpg"
                                alt=""></div>
                        <div class="col-4"><img class="p-1 img-fluid bg-light" src="img/course-2.jpg"
                                alt=""></div>
                        <div class="col-4"><img class="p-1 img-fluid bg-light" src="img/course-3.jpg"
                                alt=""></div>
                    </div>
                </div>
                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative" style="max-width: 400px;">
                        <input class="py-3 border-0 form-control w-100 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
