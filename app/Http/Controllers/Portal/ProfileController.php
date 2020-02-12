<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user       = Auth::user();

        return view('portal.profile.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        // GET CURRENT SINGED IN USER
        $user_id    = Auth::user()->id;

        // FIND USER BY ID
        $user       = User::findOrFail($user_id);

        //VALIDATE REQUEST
        $request->validate([
            'name'  => 'required',
        ]);

        // GET ALL FORM DATA EXCEPT EMAIL 
        $data       = $request->except('email');

        // UPDATE USER ACTION
        $user->update($data);
        $user->profile()->updateOrCreate(
            [],
            $data['profile']
        );

        // UserProfile::updateOrCreate(
        //     ['user_id' => $user_id],
        //     $data['profile']
        // );

        if ($user) {
            return redirect(route('portal.profile.edit'));
        }
    }
}
