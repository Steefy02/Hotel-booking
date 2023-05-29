<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CustomAuthController extends Controller {

    public function __construct() {
        $this->middleware('web');
        //$this->middleware('guest')->except('logout');
    }

    public function get_login() {
        return view('auth.login');
    }

    public function get_register() {
        return view('auth.register');
    }

    public function process_login(Request $request) {

        $request->validate(['email' => 'required', 'password' => 'required']);
        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            Session::put('user', $user);
            return redirect()->route('home');
        }

        return redirect()->back()->with('message', 'Email / Parola gresite');
    }

    public function process_register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'username' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => trim($request->name),
            'username' => trim($request->username),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
            'userType' => "client"
        ]);

        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            Session::put('user', $user);
            return redirect()->route('home');
        }
        return redirect()->back()->with("error", "Some error occured (CustomAuthController line 64)");
    }

    public function logout(Request $request)
    {
        //Auth::logout();
        $request->session()->forget('user');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}