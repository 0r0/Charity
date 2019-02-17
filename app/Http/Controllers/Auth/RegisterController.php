<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Volunteer;
use App\Charity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:volunteer');
        $this->middleware('guest:charity');
    }


    public function  showVolunteerRegisterForm()
    {

        return view('auth.register',['url'=>'volunteer-dashboard']);
    }

    public function  showCharityRegisterForm()
    {
        return view('auth.register',['url'=>'charity-dashboard']);
        
    }
    protected function  createCharity(Request $request)
    {
        $this->validator($request->all())->validate();
        $charity= Charity::create([
            'userName' => $request['userName'],
            'email' =>$request['email'],
            'password'=> Hash::make($request['password'])
        ]);
        return redirect()->intended('login/charity');

    }
    protected function createVolunteer(Request $request)
    {
        $this->validator($request->all())->validate();
        $volunteer=Volunteer::create([
           'userName' =>$request['userName'],
           'email'=>$request['email'],
           'password'=>Hash::make($request['password']),
        ]);
        return  redirect()->intended('login/volunteer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
