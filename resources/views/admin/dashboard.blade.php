@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">All Users</div>
    @if ($users->count())
        <table class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Permissions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                 <td>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2aSUcU-KC_ZGl1KIFES1pwRe4YOMv2gPx_g&usqp=CAU">
                 </td>
                    <td>
                      {{ $user->name }}
                    </td>
                    <td>
                        @if (!$user->isDesigners())
                           <form action="{{route('users.make-designers', $user->id)}}" method="post">
                            @csrf
                           <button class="btn btn-success" type="submit">Make Designers</button>
                        </form>
                        @else
                        @if ($user->role == 1)
                        Admin
                     @endif
                     @if ($user->role == 2)
                        Designers
                     @endif
                     @if ($user->role == 3)
                     User
                  @endif
                        @endif
                    </td>
                  {{--  <td>
                      <form action="{{route('users.destroy', $user->id)}}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-danger float-right btn-sm">
                               {{ $user->trashed() ? 'Delete' : 'Trash' }}
                           </button>
                      </form>
                      @if (!$user->trashed())
                      <a  href="{{route('posts.edit', $user->id)}}" class="btn btn-primary float-right btn-sm">Edit</a>
                      @else
                      <a  href="{{route('trashed.restore', $user->id)}}" class="btn btn-primary float-right btn-sm">Restore</a>
                      @endif
                  </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
          <div class="card-body">
            <h1 class="text-center">
                No Users Yet.
            </h1>
          </div>
@endif
    </div>
</div>
@endsection
