@extends('portal.default')

@section('portal_content')
<form method="post" action="{{ route('portal.profile.update') }}">
    @csrf
    <input type="hidden" name="_method" value="PUT" />
    <div class="row">
        <div class="col-md-9">
            <!-- profile-edit-container-->
            <div class="profile-edit-container">
                <div class="profile-edit-header fl-wrap">
                    <h4>My Account</h4>
                </div>
                <div class="custom-form">
                    <label>Your Name <i class="fa fa-user-o"></i></label>
                    <input name="name" type="text" placeholder="AlisaNoory" value="{{ old('name', $user->name) }}" />
                    <label>Email Address<i class="fa fa-envelope-o"></i> </label>
                    <input name="email" type="email" placeholder="AlisaNoory@domain.com"
                        value="{{ old('email', $user->email) }}" />
                    <label>Phone<i class="fa fa-phone"></i> </label>
                    <input name="profile[phone]" type="text" placeholder="+7(123)987654"
                        value="{{ old("profile[phone]", $user->profile ? $user->profile->phone : null) }}" />
                    <label> Adress <i class="fa fa-map-marker"></i> </label>
                    <input name="profile[address]" type="text" placeholder="USA 27TH Brooklyn NY"
                        value="{{ old("profile[address]", $user->profile ? $user->profile->address : null) }}" />
                    <label> Website <i class="fa fa-globe"></i> </label>
                    <input name="profile[website]" type="text" placeholder="themeforest.net"
                        value="{{ old("profile[website]", $user->profile ? $user->profile->website : null) }}" />
                    <label> Notes</label>
                    <textarea name="profile[note]" cols="40" rows="3" placeholder="About Me">
                    {{ old("profile[note]", $user->profile ? $user->profile->note : null) }}
                </textarea>
                </div>
            </div>
            <!-- profile-edit-container end-->
            <!-- profile-edit-container-->
            <div class="profile-edit-container">
                <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                    <h4>My Socials</h4>
                </div>
                <div class="custom-form">
                    <label>Facebook <i class="fa fa-facebook"></i></label>
                    <input name="profile[facebook]" type="text" placeholder="https://www.facebook.com/"
                        value="{{ old("profile[facebook]", $user->profile ? $user->profile->facebook : null) }}" />
                    <label>Twitter<i class="fa fa-twitter"></i> </label>
                    <input name="profile[twitter]" type="text" placeholder="https://twitter.com/"
                        value="{{ old("profile[twitter]", $user->profile ? $user->profile->twitter : null) }}" />
                    <label>Youtube<i class="fa fa-youtube"></i> </label>
                    <input name="profile[youtube]" type="text" placeholder="vk.com"
                        value="{{ old("profile[youtube]", $user->profile ? $user->profile->youtube : null) }}" />
                    <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i
                            class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <!-- profile-edit-container end-->
        </div>
        <div class="col-md-3">
            <div class="edit-profile-photo fl-wrap">
                <img src="{{ asset('images/avatar/4.jpg') }}" class="respimg" alt="">
                <div class="change-photo-btn">
                    <div class="photoUpload">
                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                        <input type="file" class="upload">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection