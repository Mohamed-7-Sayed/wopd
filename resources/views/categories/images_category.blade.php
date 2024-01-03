@extends('layouts.style')

@section('content')

    <!-- Portfolio Gallery -->
    <section class="section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left">
                    <h1 class="section-title"><span>Photos for this  ({{$category->name}})</span></h1>
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
    @endsection
