<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function index()
    {

        $listings       = Listing::all();

        return view('portal.listing.index', ['listings' => $listings]);
    }

    public function create()
    {
        return view('portal.listing.create');
    }

    public function store(Request $request)
    {

        // Validate Request
        $request->validate([
            'title'     => 'required',
            'address'   => 'required',
            'latitude'  => 'required',
            'longitude' => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'website'   => 'required'
        ]);

        // Get form data as array

        //GET ALL DATA
        $data           = $request->all();

        // GET ALL DATA EXCEPT SPEICIFIED DATA
        $data           = $request->except('_token');

        // GET ONLY DATA SPECIFIED
        $data           = $request->only(['title', 'address', 'latitude']);
        // dd($data);

        //CREATE METHOD LONGHAND
        // $listing        = Listing::create([
        //     'title'     => $data['title'],
        //     'address'   => $data['address'],
        //     'latitude'  => $data['latitude'],
        //     'longitude' => $data['longitude'],
        //     'phone'     => $data['phone'],
        //     'email'     => $data['email'],
        //     'website'   => $data['website'],
        // ]);

        //CREATE METHOD SHORTHAND
        // $listing            = Listing::create($data);

        // //SAVE METHOD 
        // // -- create empty object
        // $listing            = new Listing();

        // // -- Inject data to object 
        // $listing->title     = $data['title'];
        // $listing->address   = $data['address'];
        // $listing->latitude  = $data['latitude'];

        // // -- Save object to db 
        // $listing->save();

        //INSERT METHOD 
        // $listing               = Listing::insert($data);

        // MY CHOICE
        $listing                = Listing::create($request->all());

        // If create success
        if ($listing) {

            return view('portal.listing.index');
        }

        return view('portal.listing.create');
    }

    public function edit($id)
    {
        //FIND
        //FINDORFAIL 
        //WHERE 
        $listing        = Listing::findOrFail($id);

        return view('portal.listing.edit', ['listing' => $listing]);
    }

    public function update(Request $request, $id)
    {

        //CHECK IF ID EXIST IN DB
        $listing        = Listing::findOrFail($id);

        // VALIDATE SUBMITTED DATA
        $validate = $request->validate([
            'title'     => 'required',
            'address'   => 'required',
            'latitude'  => 'required',
            'longitude' => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'website'   => 'required'
        ]);

        $data           = $request->all();

        // SAVE METHOD 
        // $listing->title     = $data['title'];
        // $listing->address   = $data['address'];
        // $listing->save();

        // UPDATE METHOD 
        $listing->update($data);

        if ($listing) {
            flash('Updated Successfully! ', 'notification success');

            return redirect(route('portal.listing.index'));
        }

        flash('Sorry Something went wrong!', 'notification reject');
    }
}
