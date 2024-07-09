@extends('panel.layouts.master')

@section('page-title', 'Provinces/Edit')
@section('content')
<center>
    <h2 class="mb-5">{{sprintf('Edit Province: %s', $province->name)}}</h2>
</center>

<form method="POST" action="{{route('province.update', ['id' => $province->id])}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" value="{{$province->name}}" class="form-control" id="name" name="name">
    </div>
    <div class="form-check mb-3">
        @if ($province->is_capital)
            <input type="checkbox" checked value="1" class="form-check-input" aria-describedby="desc" id="is_capital" name="is_capital">
        @else
            <input type="checkbox" value="0"  class="form-check-input" aria-describedby="desc" id="is_capital" name="is_capital">
        @endif
        <label class="form-check-label" for="is_capital">Is Capital</label><br>
        <small id="desc" class="form-text text-muted">Check for capital province</small>
    </div>
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" value="{{$province->description}}" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection