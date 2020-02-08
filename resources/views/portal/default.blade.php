@extends('master')
@section('content')
<section id="sec1">
    <!-- container -->
    <div class="container">
        <!-- profile-edit-wrap -->
        <div class="profile-edit-wrap">
            @include('portal.layouts.breadcrumb')

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