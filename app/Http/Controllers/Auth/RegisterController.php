<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validation =  Validator::make($data, [
            'first_name'   => ['required', 'string', 'max:255'],
            'last_name'    => ['required', 'string', 'max:255'],

            'email'        => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'password'     => ['required', 'string', 'min:8', 'confirmed'],

            'profile_type' => ['required'],
            'dob'          => ['required', 'date',],
            'gender'       => ['required', 'string'],
            'username'     => ['required', 'string', 'unique:profiles'],
        ]);
        return $validation;
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'is_online' => 1,
        ]);


        if($user){

            $profile = Profile::create([
                'first_name'   => $data['first_name'],
                'last_name'    => $data['last_name'],
                'profile_type' => $data['profile_type'],
                'dob'          => $data['dob'],
                'gender'       => $data['gender'],
                'username'     => $data['username'],
                'user_id'     => $user->id,
            ]);
        }

        User::where('id',$user->id)->update(['profile_id' => $profile->id]);

        return $user;

    }
}
