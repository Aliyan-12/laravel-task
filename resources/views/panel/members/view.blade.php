@extends('panel.layouts.master')

@section('page-title', 'House Members/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('House Members')}}</h2>
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
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">CNIC</th>
            <th scope="col">House Number</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr>
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->cnic}}</td>
                <td>{{$member->getHouseNumber()}}</td>
                <td>
                    @role('admin')
                        <a href="{{route('member.edit', ['id' => $member->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('member.delete', ['id' => $member->id])}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    @endrole
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $members->links() }}
</div>
@endsection