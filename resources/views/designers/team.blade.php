@extends('layouts.designers_style')

@section('content')

<!-- Header Banner -->
<section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="1" data-background="assets/img/banner/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Creative Team</h1>
                <hr class="border-1">
                <p>Quisque sed tellus nullam biben the volutpat dignissim pretium.</p>
            </div>
        </div>
    </div>
</section>
<!-- Team -->
<section class="team section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="right">
          {{--  @foreach ($users as $user)
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('imgs/' . $user->image) }}" alt="" class="w-120"></div>
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
            @endforeach  --}}
            <div  class="news-post-user-comment">
                @foreach ($users as $user)
                <a href="#" style="margin-left: 75px"> <img style="width: 143px; height: 143px"  src="{{ asset('imgs/' . $user->image) }}" alt=""><h3 style="text-align: center">{{$user->name}}</h3></a>
                @endforeach
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
