@extends('panel.layouts.master')

@section('page-title', 'Houses/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Houses')}}</h2>
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
            <th scope="col">Number</th>
            <th scope="col">Union Council</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($houses as $house)
            <tr>
                <th scope="row">{{$house->id}}</th>
                <td>{{$house->number}}</td>
                <td>{{$house->getUCCode()}}</td>
                <td>{{$house->description}}</td>
                <td>
                    @role('admin')
                        <a href="{{route('house.edit', ['id' => $house->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('house.delete', ['id' => $house->id])}}" method="POST">
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
    {{ $houses->links() }}
</div>
@endsection