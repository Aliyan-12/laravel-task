@extends('panel.layouts.master')

@section('page-title', 'Users/Add')
@section('content')
<center>
    <h2 class="mb-5">{{trans('Add User')}}</h2>
</center>

<form method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text">First and last name</span>
        <input required type="text" name="firstName" aria-label="First name" class="form-control">
        <input required type="text" name="lastName" aria-label="Last name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Email address</label>
        <input required type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group mb-3">
        <label for="password">Password</label>
        <input required type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group mb-3">
        <label for="confirmPassword">Confirm Password</label>
        <input required type="password" class="form-control" id="confirmPassword" name="confirmPassword">
    </div>
    @if(\Spatie\Permission\Models\Role::all())
        <div class="form-group mb-3">
            <label for="role">Role</label>
            <select required class="form-control" id="role" name="role">
                <option value="{{null}}">Select Role *</option>
                @foreach (\Spatie\Permission\Models\Role::all() as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection