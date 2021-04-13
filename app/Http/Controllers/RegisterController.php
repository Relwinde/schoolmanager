<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatePassword (array $data){
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function creatAdmin (){
        $this->validator(request()->all());
        $admin = $this->create(request()->all());
        $admin->role = 'admin';
        $admin->confirmed = true;
        $admin->save();
        return redirect()->route('login')->withSuccess('Votre compte a été créé avec succès <br> Veuillez renseigner vos identifiants pour vous connecter');

    }

    public function verifyUser (){
        $user = User::where('verificationCode', request()->code)->first();
        if ($user != null){
            if ($user->confirmed == false){
                session()->put('user', $user);
                return view('pages.first-connect')->with(['firstName'=>$user->firstName, 'lastName'=>$user->lastName]);
            }
            else{
                return redirect()->route('login')->withErrors('Votre compte a été déjà été activé<br> Veuillez renseigner vos identifiants pour vous connecter');
            }
        }
        
    }

    public function savePassword (){
        $this->validatePassword(request()->all());
        $user = session()->get('user');
        $user->password = Hash::make(request()->password);
        $user->confirmed = true;
        $user->save();
        return redirect()->route('login')->withSuccess('Votre compte a été activé avec succès <br> Veuillez renseigner vos identifiants pour vous connecter');

    }

}
