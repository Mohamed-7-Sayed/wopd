@extends('layouts.style')

@section('content')
        <header id="slider-area" class="header slider-fade">
            <div class="ruby-container">
                <div class="owl-carousel owl-theme">
                    <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                    <div class="item bg-img" data-overlay-dark="3" data-background="assets/img/slider/1.jpg">
                        <div class="v-middle caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Welcome to my</h4>
                                        <h1>Phoxel Studio</h1>
                                        <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold.</p>
                                        <a href="#" class="button-primary">My Portfolio</a> <a href="#" class="button-tersiyer">Contact me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img" data-overlay-dark="2" data-background="assets/img/slider/2.jpg">
                        <div class="v-middle caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Hello there !</h4>
                                        <h1>I'm Martin Dan</h1>
                                        <p>I am professional photographer based on New York, creating dreamscapes with black, white and shades in-between.</p> <a href="#" class="button-primary">My Portfolio</a> <a href="#" class="button-tersiyer">Contact me</a>
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
            <div class="row">
                <div class="col-md-5 text-left">
                    <h2 class="section-title"><span>My Works</span></h2>
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

      <!-- Services 2 section -->
      <section class="services2 not section-padding bg-blck">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-30 text-center">
                    <h2 class="section-title"><span>My Services</span></h2>
                    <hr class="border-1">
                    <p class="section-title2">Quverra tristique justo duis vitae diam neque nivamus aestan ateuene artinaelition finibus viverra nec lacus setlie suscipe tristique.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/1.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Wedding Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Wedding Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/3.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Fashion Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Fashion Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/2.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Personal Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Personal Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/4.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Travel Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Travel Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/5.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Sport Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Sport Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/services/6.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Interior Photography</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Interior Photography</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau dis arturient monte miss morbine.</i></p>
                                <a href="services-page.html" class="button-fourth">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="assets/img/banner/2.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Work together -->
                    <div class="col-md-6 mb-30">
                        <h5>Need help with professional photography? Let's work together!</h5> <a href="contact.html" class="button-tersiyer">Contact me</a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img src="assets/img/quot.png" alt=""></span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="assets/img/team/1.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Jason Brown</h6> <span>Project Owner</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="assets/img/quot.png" alt="">
                                    </span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="assets/img/team/2.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Project Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/1.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/5.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="assets/img/clients/6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
