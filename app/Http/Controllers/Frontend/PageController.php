<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $listings       = Listing::select('*')
            ->get();

        return view('public.index', ['listings' => $listings]);
    }
}