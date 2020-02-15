<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listing($id)
    {
        $listing    = Listing::findOrFail($id);

        return view('public.listing', ['listing' => $listing]);
    }
}