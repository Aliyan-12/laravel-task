@extends('panel.layouts.master')

@section('page-title', 'Divisions/Edit')
@section('content')
<center>
    <h2 class="mb-5">{{sprintf('Edit Division: %s', $division->name)}}</h2>
</center>

<form method="POST" action="{{route('division.update', ['id' => $division->id])}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" value="{{$division->name}}" class="form-control" id="name" name="name">
    </div>
    <div class="form-group mb-3">
        <label for="province_id">Province</label>
        <select required class="form-control" id="province_id" name="province_id">
            <option value="{{null}}">Select Province *</option>
            @foreach (\App\Models\Province::where('is_capital', '=', 0)->get() as $province)
                @if ($province->id == $division->getProvinceId())
                    <option selected value="{{$province->id}}">{{$province->name}}</option>
                @else
                    <option value="{{$province->id}}">{{$province->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" value="{{$division->description}}" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection