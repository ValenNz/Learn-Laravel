<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ] );
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]); 

        /* Enripsi password */
        // $validateData['password']= bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        /* Insert data */
        User::create($validateData);

        /* Alert */
        // $request->session()->flash('success', 'Registration successfull! PLease Login');

        /* Redirect */
        return redirect('/login')->with('success', 'Registration successfull! PLease Login'); // redirect ke halaman login dengan alert
    }
}
