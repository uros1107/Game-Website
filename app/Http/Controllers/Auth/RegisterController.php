<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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
            'name' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
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

    public function register(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|unique:users',
            'name' => 'required|string|unique:users',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false]);
        }

        User::create([
            'name' => $request->name,
            'slug' => str_slug($request->name,'-'),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'game_name' => $request->game_name,
            'guild_name' => $request->guild_name,
        ]);

        $user = User::where('email', $request->email)->first();
        Auth::login($user);

        return response()->json(['success' => true]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|string|required',
        ]);

        $user = Auth::user();
        $user->email = $request->email;
        if($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->game_name = $request->game_name;
        $user->guild_name = $request->guild_name;
        $user->save();
        
        return redirect()->route('user-private', [Session::get('lang'), $user->slug])->with('success', 'Successfully updated!');
    }

    // Register
    public function showRegistrationForm(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/auth/register', [
          'pageConfigs' => $pageConfigs
      ]);
    }
}
