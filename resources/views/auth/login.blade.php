@extends('layouts.app')

@section('content')
<h3>Login</h3>
<form method="POST" action="{{ url('login') }}">
    @csrf
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary">Login</button>
</form>
@endsection
