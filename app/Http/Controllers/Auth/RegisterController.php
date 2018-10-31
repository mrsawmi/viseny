<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function redirectTo()
    {
        return '/login';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */

    protected function create(Request $request)
    {
        if ($request->input('regPassword') == $request->input('regPasswordConfirm')) {
            return User::create([
                'user_fullName' => $request->input('regName') . ' ' . $request->input('regFamily'),
                'user_email' => $request->input('regEmail'),
                'user_phoneNumber' => $request->input('regCaller'),
                'user_password' => $request->input('regPassword'),
            ]);
        }
    }
}
