<?php

namespace App\Http\Controllers\Auth;

use App\Mail\DemoMail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserCreateRequest;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectTo()
    {
        return redirect()->route('login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userFullName' => 'required|string|max:255',
            'userEmail' => 'required|string|email|max:255|unique:users',
            'userPhone' => 'requied|stirng|email|min:11|max:11',
            'userPassword' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function create(UserCreateRequest $request)
    {
        if ($request->input('userPassword') == $request->input('userPasswordConfirm')) {
            $user = User::create([
                'user_fullName' => $request->input('userFullName'),
                'email' => $request->input('userEmail'),
                'password' => bcrypt($request->input('userPassword')),
                'user_phoneNumber' => $request->input('userPhone')
            ]);
//            $email = $request->input('userEmail');
//            Mail::to($email)->send(new DemoMail());
            return $this->redirectTo();
        }

    }
}
