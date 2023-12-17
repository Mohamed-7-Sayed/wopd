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

<section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed" data-overlay-darkgray="1" data-background="assets/img/banner/7.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="news-post-categorydate-wrapper">
                     <a href="blog.html"><div>Resources</div></a>
                     <div class="news-post-categorydate-divider"></div>
                     <div>Dec 14, 2024</div>
                </div>
                <h1>Cosina announces its fastest full-frame lens, the Nokton 50mm</h1>
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
                    <h1>{{$create->title}}</h1><div style="text-align: right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Buy     <h5> </h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1z"/>
                      </svg></button></div>
                      <div style="text-align: center"><button  type="button" class="btn btn-primary">Download</button></div>



                        <!-- Modal -->

                      <h1> </h1>
                    <p>{{$create->description}}</p>
                </div>
            </div>
            <div class="news-comment-section">
            <div class="row">

                    <!-- Comment -->
                    <div class="col-md-7">
                        <div class="news-post-comment-wrap">
                            <div class="news-post-user-comment"> <img src="assets/img/team/4.jpg" alt=""> </div>
                            <div class="news-post-user-content">
                                <h3>Betty Misse &nbsp;&nbsp;<span>29 Dec 2024</span></h3>
                                <p>Photography ultricies nibh non dolor maximus sceleue inte molliser faubs neque nec tincidunte aliquam erat tempore. </p> <a class="news-post-repay" href="#">Reply<i class="ti-back-left"></i></a> </div>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-5">
                        <h3>Leave a Reply</h3>
                        <form method="post" class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="Full Name *" required=""> </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="Email Address *" required=""> </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Comment *" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="button-fourth mt-15"><a href="#0"><span>Send Comment</span></a></button>
                            </div>
                        </form>
                    </div>
            </div>
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
