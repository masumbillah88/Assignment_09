@extends('layouts.app')

@section('title','AboutMe')
@section('content')
 <!-- Expertise Start -->
 <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class = "display-5 text-normal">Brief Biography</h1>
                    <p class="mb-4"> I am Shahriar Masum born in 1986 in Barishal. I have completed my graduatio from Jagannath University in Zoology and completed my post graduation from the same University in Wildelife Management and Conservatin Nature. Started my career as a journalist in the Reputed Daily Jaijaidin and then joined IBBPLC. Now, I am a web developer equipped with php and laravel framework.</p>

                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Angular JS</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Wordpress</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>WEB DEVELOPER</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023 - PRESENT</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>BANKER</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2012 - 2023</p>
                                    <h6 class="mb-0">IBBPLC</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>JOURNALIST</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2010 - 2012</p>
                                    <h6 class="mb-0">DAILY JAIJAIDIN</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>TRANSLATOR</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2006 - 2023</p>
                                    <h6 class="mb-0">COSMIC GLOBAL LIMITED</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>EMBA</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2018 - 2019</p>
                                    <h6 class="mb-0"> University of Global Village</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Wildlife Management</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2009 - 2010</p>
                                    <h6 class="mb-0">Jagannath University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Zoology</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2004 - 2009</p>
                                    <h6 class="mb-0">Jagannath University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->
@endsection