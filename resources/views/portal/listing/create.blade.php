@extends('portal.default')

@section('portal_title')
Add Listings
@endsection

@section('portal_content')
<div class="notification success fl-wrap">
    <p>Your listing <a href="#">Fitness Center Brooklyn</a> has been approved!</p>
    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
</div>
<form method="POST" action="{{ route('portal.listing.store') }}">
    @csrf
    <div class="profile-edit-container add-list-container">
        <div class="profile-edit-header fl-wrap">
            <h4>Basic Informations</h4>
        </div>
        <div class="custom-form form-row">
            <label>Listing Title <i class="fa fa-briefcase"></i></label>
            <input name="title" type="text" placeholder="Name of your business" value="" />
            @error('title')
            <div class="red-text">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="profile-edit-container add-list-container">
        <div class="profile-edit-header fl-wrap">
            <h4>Location / Contacts</h4>
        </div>
        <div class="custom-form">
            <label>Address<i class="fa fa-map-marker"></i></label>
            <input name="address" type="text" placeholder="Address of your business" value="" />
            <div class="row">
                <div class="col-md-6">
                    <label>Latitude:<i class="fa fa-map-marker"></i></label>
                    <input name="latitude" type="text" id="lat" placeholder="" value="" />
                </div>
                <div class="col-md-6">
                    <label>Longitude:<i class="fa fa-map-marker"></i></label>
                    <input name="longitude" type="text" id="long" placeholder="" value="" />
                </div>
            </div>
            <label>Phone<i class="fa fa-phone"></i></label>
            <input name="phone" type="text" placeholder="Your Phone" value="" />
            <label>Email<i class="fa fa-envelope-o"></i></label>
            <input name="email" type="text" placeholder="Your Email" value="" />
            <label>Website<i class="fa fa-globe"></i></label>
            <input name="website" type="text" placeholder="Your Website" value="" />
        </div>
    </div>
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap" style="margin-top:30px">
            <h4>Socials</h4>
        </div>
        <div class="custom-form">
            <label>Facebook <i class="fa fa-facebook"></i></label>
            <input name="facebook" type="text" placeholder="https://www.facebook.com/" value="" />
            <label>Twitter<i class="fa fa-twitter"></i> </label>
            <input name="twitter" type="text" placeholder="https://twitter.com/" value="" />
            <label>Youtube<i class="fa fa-youtube"></i> </label>
            <input name="youtube" type="text" placeholder="youtube.com" value="" />
            <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i
                    class="fa fa-angle-right"></i></button>
        </div>
    </div>
</form>
@endsection