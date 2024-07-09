@extends('panel.layouts.master')

@section('page-title', 'Districts/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Districts')}}</h2>
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
            <th scope="col">Division</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($districts as $district)
            <tr>
                <th scope="row">{{$district->id}}</th>
                <td>{{$district->name}}</td>
                <td>{{$district->getDivisionName()}}</td>
                <td>{{$district->description}}</td>
                <td>
                    @role('admin')
                        <a href="{{route('district.edit', ['id' => $district->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('district.delete', ['id' => $district->id])}}" method="POST">
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
    {{ $districts->links() }}
</div>
@endsection