@extends('panel.layouts.master')

@section('page-title', 'Tehsils/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Tehsils')}}</h2>
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
            <th scope="col">District</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tehsils as $tehsil)
            <tr>
                <th scope="row">{{$tehsil->id}}</th>
                <td>{{$tehsil->name}}</td>
                <td>{{$tehsil->getDistrictName()}}</td>
                <td>{{$tehsil->description}}</td>
                <td>
                    <a href="{{route('tehsil.edit', ['id' => $tehsil->id])}}" class="btn btn-outline-info">Edit</a>
                    <form action="{{route('tehsil.delete', ['id' => $tehsil->id])}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $tehsils->links() }}
</div>
@endsection