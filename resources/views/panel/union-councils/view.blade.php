@extends('panel.layouts.master')

@section('page-title', 'Union Councils/View')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Union Councils')}}</h2>
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
            <th scope="col">Code</th>
            <th scope="col">Tehsil/Province</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($unionCouncils as $unionCouncil)
            <tr>
                <th scope="row">{{$unionCouncil->id}}</th>
                <td>{{$unionCouncil->name}}</td>
                <td>{{$unionCouncil->code}}</td>
                <td>{{$unionCouncil->getParentName()}}</td>
                <td>{{$unionCouncil->description}}</td>
                <td>
                    <a href="{{route('union-council.edit', ['id' => $unionCouncil->id])}}" class="btn btn-outline-info">Edit</a>
                    <form action="{{route('union-council.delete', ['id' => $unionCouncil->id])}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $unionCouncils->links() }}
</div>
@endsection