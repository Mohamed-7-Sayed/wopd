@extends('layouts.designers_style')

@section('content')
<section class="content-main">
    <form action="{{route('DesignerRequest.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Basic</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div class="mb-4">
                            <label for="Title" class="form-label">First Name</label>
                            <input type="text" placeholder="Type here" class="form-control" name="First_Name" value="">
                        </div>
                        <div class="mb-4">
                            <label for="Title" class="form-label">Last Name</label>
                            <input type="text" placeholder="Type here" class="form-control" name="Last_Name" value="">
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="Title" class="form-label">Job</label>
                            <input type="text" placeholder="Type here" class="form-control" name="Job" value="">
                        </div>
                        <div class="mb-4">
                            <label for="Title" class="form-label">Age</label>
                            <input type="text" placeholder="Type here" class="form-control" name="Age" value="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Introduce yourself</label>
                            <textarea placeholder="Type here" class="form-control" rows="4" name="Yourself" value=""></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="form-label">Date of birth</label>
                                <select class="form-select" name="Year" value="">
                                    <option> 1990 </option><option> 1991 </option><option> 1992 </option><option> 1993 </option><option> 1994 </option><option> 1995 </option><option> 1996 </option><option> 1997 </option><option> 1998 </option><option> 1999 </option><option> 2000 </option><option> 2001 </option><option> 2002 </option><option> 2003 </option><option> 2004 </option><option> 2005 </option><option> 2006 </option><option> 2007 </option><option> 2008 </option><option> 2009 </option><option> 2010 </option><option> 2011 </option><option> 2012 </option><option> 2013 </option><option> 2014 </option><option> 2015 </option><option> 2016 </option><option> 2017 </option><option> 2018 </option><option> 2019 </option><option> 2020 </option>
                                </select>
                                <select class="form-select" name="Month" value="">
                                    <option> January </option><option> February </option><option> March </option><option> April </option><option> May </option><option> June </option><option> July </option><option> August </option><option> September </option><option> October </option><option> November </option><option> December </option>
                                </select>
                                <select class="form-select" name="Day" value="">
                                    <option> 1 </option><option> 2 </option><option> 3 </option><option> 4 </option><option> 5 </option><option> 6 </option><option> 7 </option><option> 8 </option><option> 9 </option><option> 10 </option><option> 11 </option><option> 12 </option><option> 13 </option><option> 14 </option><option> 15 </option><option> 16 </option><option> 17 </option><option> 18 </option><option> 19 </option><option> 20 </option><option> 21 </option><option> 22 </option><option> 23 </option><option> 24 </option><option> 25 </option><option> 26 </option><option> 27 </option><option> 28 </option><option> 29 </option><option> 30 </option><option> 31 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- card end// -->
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Image You</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <input class="form-control" type="file" name="Image" >
                    </div>
                </div>
            </div> <!-- card end// -->
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
    </div>
</form>
</section> <!-- content-main end// -->
@endsection
