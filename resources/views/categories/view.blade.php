@extends('layouts.app')

@section('content')

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
