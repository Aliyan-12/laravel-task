@extends('layouts.master')
@section('page-title', 'Register')

@section('content')
<div class="auth-container">
    <h2>Register</h2>
    <form method="POST" action="{{route('user.register')}}">
        @csrf
        <span class="input-group-text">First and last name</span>
        <div class="input-group mb-3">
            <input required type="text" name="firstName" aria-label="First name" class="form-control">
            <input required type="text" name="lastName" aria-label="Last name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input required type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input required type="password" class="form-control" name="confirmPassword" id="confirmPassword">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection