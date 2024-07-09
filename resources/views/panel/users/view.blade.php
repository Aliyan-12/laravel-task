@extends('panel.layouts.master')

@section('page-title', 'Users/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Users')}}</h2>
</center>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('failure'))
    <div class="alert alert-danger">
        {{ session('failure') }}
    </div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->firstName}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->getRoleNames())
                        {{implode(', ', $user->getRoleNames()->toArray())}}
                    @endif
                </td>
                <td>
                    @role('admin')
                        <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('user.delete', ['id' => $user->id])}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    @endrole
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection