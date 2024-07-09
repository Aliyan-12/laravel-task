@extends('panel.layouts.master')

@section('page-title', 'Divisions/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Divisions')}}</h2>
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
            <th scope="col">Province</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($divisions as $division)
            <tr>
                <th scope="row">{{$division->id}}</th>
                <td>{{$division->name}}</td>
                <td>{{$division->getProvinceName()}}</td>
                <td>{{$division->description}}</td>
                <td>
                    @role('admin')
                        <a href="{{route('division.edit', ['id' => $division->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('division.delete', ['id' => $division->id])}}" method="POST">
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
    {{ $divisions->links() }}
</div>
@endsection