@extends('layouts.style')

@section('content')
        <header id="slider-area" class="header slider-fade">
            <div class="ruby-container">
                <div class="owl-carousel owl-theme">
                    <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                    <div class="item bg-img" data-overlay-dark="3" data-background="assets/img/slider/rsz_adobestock_247275495-1024x711.jpg">
                        <div class="v-middle caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Welcome to you</h4>
                                        <img src="/assets/img/pngegg.png" alt="" style="width: 30%"><h1>WOPD</h1>
                                        <p>Here there are wonderful pictures and designs of professional designers .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    <!-- Portfolio Gallery -->
    <section class="section-padding bg-blck">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-30 text-center">
                    <h2 class="section-title"><span>Pictures</span></h2>
                    <hr class="border-1">
                </div>
            </div>
            <div class="row gallery-items">
                @foreach ($creates as $create)
                    <div class="col-md-4 gallery-masonry-wrapper single-item wedding">
                        <a  href="{{ url('/' . $page='photo') }}/{{ $create->id }}"  class="gallery-masonry-item-img-link " tabindex="0">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('imgs/' . $create->image) }}" class="img-fluid mx-auto d-block"  alt=""> </div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <div class="gallery-masonry-item-category">{{$create->category->name}}</div>
                                    <h4 class="gallery-masonry-item-title">{{$create->title}}</h4>
                                    <h4 class="gallery-masonry-item-title">${{$create->price}}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="team section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-20">
                    <h2 class="section-title"><span>Professional Team</span></h2>
                    <hr class="border-1">
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($users as $user)
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('imgs/' . $user->image) }}" alt="" style="height: 380px" class="w-120"></div>
                        <div class="team-content">
                            <h3 class="team-title">{{$user->name}}</h3>
                            <p class="team-text">I'm a professional product photographer in New York, NY. Quisque sed tellus nullam biben the volutan vetium.</p>
                            <a href="team-details.html" class="button-tersiyer">About me</a>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">{{$user->name}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
