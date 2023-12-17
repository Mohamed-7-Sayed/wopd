@extends('layouts.designers_style')

@section('content')
<section class="content-main">
    <form action="#" method="post" enctype="multipart/form-data">
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
                            <label for="Title" class="form-label">Product title</label>
                            <input type="text" placeholder="Type here" class="form-control" name="Title" value="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Full description</label>
                            <textarea placeholder="Type here" class="form-control" rows="4" name="Description" value=""></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Price</label>
                                    <div class="row gx-2">
                                        <input placeholder="$" type="text" class="form-control" name="Price" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Currency</label>
                                <select class="form-select" name="Currency" value="">
                                    <option> USD </option>
                                    <option> EUR </option>
                                    <option> RUBL </option>
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
                    <h4>Media</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <input class="form-control" type="file" name="Image" >
                    </div>
                </div>
            </div> <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Organization</h4>
                </div>
                <div class="card-body">
                    <div class="row gx-2">
                        <div class="col-sm-6 mb-3">
                            <label for="category_id">Select a category</label>
                            <select name="category_id" class="form-select" id="category_id" value="">
                              @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div> <!-- row.// -->
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
