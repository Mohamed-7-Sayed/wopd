@extends('layouts.style')

@section('content')
    <!-- Portfolio 2 -->
    <section class="section-padding">
        <div class="container">
            <div class="row portfolio2">
                @foreach ($categories as $category)
                <div class="col-md-4 gallery-masonry-wrapper single-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{route('ImagesCategory.show', $category->id)}}">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('images/' . $category->images) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                        </div>
                    </a>
                    <div class="con">
                        <h4><a href="portfolio-page.html"> {{ $category->name }}</a></h4>
                        <p>Quisque sed tellus lorem. Nullam bibena tortor seman marine porta felis the orta pretium.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
