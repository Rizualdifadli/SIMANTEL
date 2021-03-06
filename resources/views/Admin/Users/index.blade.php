@extends('layouts.app')
@section('title' , 'Manajement User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                  @can('register-users')
                      <a href="{{ route('register') }}"><button type="button" class="btn btn-primary float-left">Register new user</button></a>
                  @endcan
                  <form action="auth/passwords/reset"method="POST" class="float-right">
                    @csrf
                    <button type="submit" class="btn btn-warning">Ganti Password</button>
                  </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Updated at</th>
      <th scope="col">Roles</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->updated_at}}</td>
      <td>{{implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
      <td>@can('edit-users')
        <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
        @endcan
        @can('delete-users')
        <form action="{{route('admin.users.destroy',$user)}}"method="POST" class="float-left">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
        @endcan
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
