@extends('panel.layouts.master')

@section('page-title', 'Divisions/Add')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Add Division')}}</h2>
</center>

<form method="POST" action="{{route('division.store')}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" class="form-control" id="name" name="name">
    </div>
    <div class="form-group mb-3">
        <label for="province_id">Province</label>
        <select required class="form-control" id="province_id" name="province_id">
            <option value="{{null}}">Select Province *</option>
            @foreach (\App\Models\Province::all() as $province)
                <option value="{{$province->id}}">{{$province->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection