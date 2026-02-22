<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function register(Request $request){
            $validData = $request->validate([
                'username'=>'required|string',
                'email' => 'required|email',
                'password'=>'required|min:6'
            ]);
            $user = new User();
            $user->name = $validData['username'];
            $user->email = $validData['email'];
            $user->password = $validData['password'];

            $user->save();
            Auth::login($user);
            return view('Dashboard');
    }
    public function login(Request $request){
        $validData = $request->validate([
            'email' => 'required|email',
            'password'=>'required|min:6'
        ]);
        Auth::attempt($validData);
        return redirect('/dashboard');

    }
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
