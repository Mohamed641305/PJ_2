@extends('layouts.guest')
@section('content')
    <!-- Header Start -->
    <div class="py-5 mb-5 container-fluid bg-primary page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="text-center col-lg-10">
                    <h1 class="text-white display-3 animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Testimonial Start -->
    <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="px-3 text-center bg-white section-title text-primary">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                            Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                            Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                            Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle" src="{{ asset('img/testimonial-4.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                            Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
