@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Add a new Category
        </div>
        <div class="card-body">
            <form action="{{isset($category) ? route('category.update', $category->id) : route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="category">Category Name:</label>
                    <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" placeholder="Add a new category" value="{{ isset($category) ? $category->name : "" }}">
                     @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                     @enderror
                </div>

                    <div class="card-body">
                        <div class="input-upload">
                            <input class="form-control" type="file" name="Images" >
                        </div>
                    </div>


                <div class="form-group">
                    <button class="btn btn-success">
                        {{ isset($category) ? "Update" : "Add" }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="clearfix">
        <a href="{{ route('category.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Category</a>
    </div>
    <div class="card card-default">
        <div class="card-header">All Categories</div>
        <table class="card-body">
            <table class="table">
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td class="float-right">
                            <form class="float-right d-block" action="{{route('category.destroy', $category->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form class="float-right d-block">
                            <a  href="{{route('category.edit', $category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    </div>
@endsection
