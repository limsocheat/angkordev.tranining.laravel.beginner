@extends('portal.default')

@section('portal_content')
@if (flash()->message)
<div class="{{ flash()->class }}">
    {{ flash()->message }}
</div>
@endif
<div class="dashboard-list-box fl-wrap">
    <div class="dashboard-header fl-wrap">
        <h3>Indox</h3>
    </div>
    <!-- dashboard-list end-->
    @foreach ($listings as $listing)
    <div class="dashboard-list">
        <div class="dashboard-message">
            <span class="new-dashboard-item">New</span>
            <div class="dashboard-listing-table-image">
                <a href="listing-single.html"><img src="{{ asset('images/all/3.jpg') }}" alt=""></a>
            </div>
            <div class="dashboard-listing-table-text">
                <h4><a href="listing-single.html">{{ $listing->title }} </a></h4>
                <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a
                        href="#">{{ $listing->address }}</a></span>
                <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                    <span>(2 reviews)</span>
                </div>
                <ul class="dashboard-listing-table-opt  fl-wrap">
                    <li><a href="{{ route('portal.listing.edit', $listing->id) }}">Edit <i
                                class="fa fa-pencil-square-o"></i></a></li>
                    <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- dashboard-list end-->
    @endforeach
</div>
@endsection