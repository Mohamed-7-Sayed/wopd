@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">All Users</div>
    @if ($users->count())
        <table class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Permissions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designers_request as $designer)
                <tr>
                    <td>
                      {{ $designer->First_Name }}
                    </td>
                    <td>

                           <form action="{{route('users.designer-request', $designer->Created_by)}}" method="post">
                            <input type="hidden" name="user_id" value="{{$designer->Created_by}}"/>
                            @csrf
                           <button class="btn btn-success" type="submit">Make Designers</button>
                        </form>


                    </td>
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

                  {{--  <td>

@if (!$user->isDesigners())



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
