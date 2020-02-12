<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login_form()
    {
        return view('auth.login');
    }

    public function register_form()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        // VALIDATE REQUEST
        $this->validator($request->all())->validate();
        // CREATE USER
        $user = $this->create($request->all());

        // LOGIN CREATED USER
        $this->guard()->login($user);

        return redirect(route('portal.listing.index'));
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
