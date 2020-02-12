@extends('master')

@section('content')
<div class="container" style="padding: 100px 0;">
    <h1 style="font-size: 36px; text-align: left; margin-bottom: 30px;">Register Form</h1>
    <div class="custom-form">
        <form method="post" action="{{ route('auth.register') }}">
            @csrf
            <label>First Name * </label>
            <input name="name" type="text">
            <label>Email Address *</label>
            <input name="email" type="text">
            <label>Password *</label>
            <input name="password" type="password">
            <label>Confirm Password *</label>
            <input name="password_confirmation" type="password">
            <button type="submit" class="btn  big-btn  color-bg flat-btn"><span>Register</span></button>
        </form>
    </div>
</div>
@endsection