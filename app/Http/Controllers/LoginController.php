<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'        
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required', // dns harus .com
            'password' => 'required'
        ]);

        /** Dance,sIL */
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')
        ;
        }   
        return back()->with('loginErrror', 'Login failed');
        dd('berhasil');
    
    } 

    public function logout(){
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

}
