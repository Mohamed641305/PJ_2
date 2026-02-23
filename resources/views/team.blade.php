@extends('layouts.guest')
@section('content')
    <!-- Header Start -->
    <div class="py-5 mb-5 container-fluid bg-primary page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="text-center col-lg-10">
                    <h1 class="text-white display-3 animated slideInDown">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-1.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-2.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-3.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-4.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-2.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-3.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-4.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src={{ asset('img/team-3.jpg') }} alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
