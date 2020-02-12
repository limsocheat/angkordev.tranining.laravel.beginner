@extends('portal.default')

@section('portal_title')
Delete Listings
@endsection

@section('portal_content')
<div class="d-flex">
    <img src="{{ asset('images/trash_icon.png') }}" style="width: 120px; height: auto;" />
</div>
<div class="d-flex">
    <h2 style="font-size: 36px !important;">Are you sure want to delete listing?</h2>
</div>
<div class="d-flex" style="margin: 80px 0;">
    <ul>
        <li>Name: {{ $listing->title }} </li>
        <li>Address: {{ $listing->address }}</li>
        <li>Phone: {{ $listing->phone }}</li>
    </ul>
</div>
<div class="d-flex">
    <form method="POST" action="{{ route('portal.listing.destroy', $listing->id) }}">
        @csrf
        <input type="hidden" name="_method" value="delete" />

        <button type="submit" class="btn  big-btn  color-bg flat-btn" style="cursor: pointer">Delete<i
                class="fa fa-angle-right"></i></button>
    </form>
</div>
@endsection