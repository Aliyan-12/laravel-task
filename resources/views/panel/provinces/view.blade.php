@extends('panel.layouts.master')

@section('page-title', 'Provinces/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Provinces')}}</h2>
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
            <th scope="col">Capital</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($provinces as $province)
            <tr>
                <th scope="row">{{$province->id}}</th>
                <td>{{$province->name}}</td>
                <td>{{$province->is_capital}}</td>
                <td>{{$province->description}}</td>
                <td>
                    @role('admin')
                        <a href="{{route('province.edit', ['id' => $province->id])}}" class="btn btn-outline-info">Edit</a>
                        <form action="{{route('province.delete', ['id' => $province->id])}}" method="POST">
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
    {{ $provinces->links() }}
</div>
@endsection