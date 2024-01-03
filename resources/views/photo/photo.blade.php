@extends('layouts.style')

@section('content')
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('procurement.store') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="create_id" id="create_id" value="{{ $create->id }}">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="input-upload">
                        <input class="form-control" type="file" name="Image" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">send</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="1" data-background="/assets/img/banner/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="news-post-categorydate-wrapper">
                </div>
                <h1>Buy the picture then upload it</h1>
            </div>
        </div>
    </div>
</section>
<!-- Post -->
<section class=" section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('imgs/' . $create->image) }}" class="mb-30" alt="">
                    <svg style="margin-left: 483px; margin-top: -695px; color:aliceblue" xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-file-earmark-lock" viewBox="0 0 16 16">
                        <path d="M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0M7 7v1h2V7a1 1 0 0 0-2 0M6 9.3v2.4c0 .042.02.107.105.175A.637.637 0 0 0 6.5 12h3a.64.64 0 0 0 .395-.125c.085-.068.105-.133.105-.175V9.3c0-.042-.02-.107-.105-.175A.637.637 0 0 0 9.5 9h-3a.637.637 0 0 0-.395.125C6.02 9.193 6 9.258 6 9.3"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                      </svg>
                    <h2>{{$create->title}} <div style="text-align: center"><button  type="button" class="btn btn-primary" style="margin-top: -114px">Download</button></div></h2><p>{{$create->description}}</p><div style="text-align: right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top: -332px; height: 60px"> Buy     <h5> </h5><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -47px" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1z"/>
                      </svg></button></div>
                        <!-- Modal -->

                </div>
            </div>
        </div>
    </section>
 <!-- Portfolio Gallery -->
 <section class="section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-left">
                <h2 class="section-title"><span>Similar Pictures</span></h2>
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

<script>

$('#exampleModalCenter').modal('show')
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@endsection
