@extends('layouts.style')

@section('content')
{{--<link rel="stylesheet" href="/assets/css/profile.css">
<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="{{ asset('imgs/' . $user->image) }}"
                    alt="" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">

                    <button type="button" style="color: #f8f9fa" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                      style="z-index: 1;">
                      Edit profile
                    </button>
                  </div>
                  <div class="ms-3" style="margin-top: 130px;">
                    <h5>{{ $user->name }}</h5>
                    <p>{{ $user->country }}</p>
                  </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                  <div class="d-flex justify-content-end text-center py-1">
                    <div>
                      <p class="mb-1 h5">253</p>
                      <p class="small text-muted mb-0">Photos</p>
                    </div>
                    <div class="px-3">
                      <p class="mb-1 h5">1026</p>
                      <p class="small text-muted mb-0">Followers</p>
                    </div>
                    <div>
                      <p class="mb-1 h5">478</p>
                      <p class="small text-muted mb-0">Following</p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <div class="mb-5">
                    <p class="lead fw-normal mb-1">About</p>
                    <div class="p-4" style="background-color: #f8f9fa;">
                      <p class="font-italic mb-1">{{ $user->job }}</p>
                      <p class="font-italic mb-1">{{ $user->email }}</p>
                      <p class="font-italic mb-0">Photographer</p>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0">Recent photos</p>
                    <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                        alt="image 1" class="w-100 rounded-3">
                    </div>
                    <div class="col mb-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                        alt="image 1" class="w-100 rounded-3">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp"
                        alt="image 1" class="w-100 rounded-3">
                    </div>
                    <div class="col">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp"
                        alt="image 1" class="w-100 rounded-3">
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </div>
    </div>
  </section>--}}


      <!-- Header Banner -->
      <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="1" data-background="/assets/img/banner/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>{{$user->name}}</h1>
                    <hr class="border-1">
                    <p>I'm a professional {{$user->job}}.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- My Info -->
    <section class="about team-box mb-0 section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img mb-60">
                        <div class="img"> <img src="{{ asset('imgs/' . $user->image) }}" style="width: 400px; height: 470px" class="img-fluid" alt=""> </div>
                    </div>
                    <p class="mb-30">Photography tortor risus, pharetra ut venenatis ac, rutrum egante. Fusce convallis nibh felis the hendrerit diam rhoncus silver. Doneictum lacus eleifend nis venenatis.</p>
                    <ul class="list-unstyled about-list mb-60">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Over 10 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>100+ successfully executed projects</p>
                            </div>
                        </li>
                    </ul>
                    <!-- tab -->
                    <ul class="nav nav-tabs simpl-bord mt-60" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"> <span class="nav-link active cursor-pointer" id="vision-tab" data-bs-toggle="tab" data-bs-target="#biography">Biography</span> </li>
                        <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#education">Education</span> </li>
                        <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#awards">Awards</span> </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="biography" role="tabpanel" aria-labelledby="vision-tab">
                            <p>Biography utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                        </div>
                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="mission-tab">
                            <p>Education utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                        </div>
                        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="mission-tab">
                            <p>Awards utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="wrap">
                        <div class="desc">
                            <div class="section-title mb-15">Contact Me</div>
                        </div>
                        <div class="cont">
                            <div class="coll">
                                <h6>Email Us Directly</h6>
                            </div>
                            <div class="coll">
                                <h5>olivia@phoxel.com</h5>
                            </div>
                        </div>
                        
                        <div class="cont">
                            <div class="coll">
                                <div class="social-icon"> <a href="index.html"><i class="ti-facebook"></i></a> <a href="index.html"><i class="ti-twitter"></i></a> <a href="index.html"><i class="ti-instagram"></i></a> <a href="index.html"><i class="ti-pinterest"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title mb-0">My Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 gallery-item">
                    <a href="/assets/img/works/e2.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="/assets/img/works/e2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-item">
                    <a href="/assets/img/works/f1.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="/assets/img/works/f1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-item">
                    <a href="/assets/img/works/p1.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="/assets/img/works/p1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-item">
                    <a href="/assets/img/works/p3.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="/assets/img/works/p3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-20">
                    <h2 class="section-title"><span>Other Team</span></h2>
                    <hr class="border-1">
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="/assets/img/team/3.jpg" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Enrico Brown</h3>
                            <p class="team-text">I'm a professional product photographer in New York, NY. Quisque sed tellus nullam biben the volutan vetium.</p>
                            <a href="team-details.html" class="button-tersiyer">About me</a>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Enrico Brown</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="/assets/img/team/1.jpg" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Micheal Martin</h3>
                            <p class="team-text">I'm a professional bride photographer in London, UK. Quisque sed tellus nullam biben the volutan vetium.</p>
                            <a href="team-details.html" class="button-tersiyer">About me</a>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Micheal Martin</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="/assets/img/team/2.jpg" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Olivia White</h3>
                            <p class="team-text">I'm a professional fashion photographer in Bern, Switzerland. Quisque sed tellus nullam biben the volutan vetium.</p>
                            <a href="team-details.html" class="button-tersiyer">About me</a>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Olivia White</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
