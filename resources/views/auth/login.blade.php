@extends('master')

@section('content')

<div class="container">
    <div class="custom-form" style="padding: 100px 0;">
        <form method="POST" action="{{route('login') }}" name="registerform">
            @csrf
            <label>Username or Email Address * </label>
            <input name="email" type="text" onClick="this.select()" value="">
            <label>Password * </label>
            <input name="password" type="password" onClick="this.select()" value="">
            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
            <div class="clearfix"></div>
            <div class="filter-tags">
                <input id="check-a" type="checkbox" name="check">
                <label for="check-a">Remember me</label>
            </div>
        </form>
        <div class="lost_password">
            <a href="#">Lost Your Password?</a>
        </div>
    </div>
</div>

@endsection