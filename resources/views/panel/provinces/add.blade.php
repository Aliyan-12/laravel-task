@extends('panel.layouts.master')

@section('page-title', 'Provinces/Add')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Add Province')}}</h2>
</center>

<form method="POST" action="{{route('province.store')}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" class="form-control" id="name" name="name">
    </div>
    <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" aria-describedby="desc" id="is_capital" name="is_capital">
        <label class="form-check-label" for="is_capital">Is Capital</label><br>
        <small id="desc" class="form-text text-muted">Check for capital province</small>
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