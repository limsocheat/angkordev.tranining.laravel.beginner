@extends('master')
@section('content')
<section id="sec1">
    <!-- container -->
    <div class="container">
        <!-- profile-edit-wrap -->
        <div class="profile-edit-wrap">
            <div class="profile-edit-page-header">
                <h2>@yield('portal_title')</h2>
                <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Add Listing</span></div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    @include('portal.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @yield('portal_content')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection