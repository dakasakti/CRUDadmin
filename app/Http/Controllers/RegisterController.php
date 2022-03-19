<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $regis = $request->validate([
            'name'=>'required| max:255' ,
            'username'=>'required| min:8 | max:255',
            'email'=>'required|email:dns',
            'password'=>'required|min:8|max:16'
        ]);

        $regis['password'] = bcrypt ($regis['password']);

        User::create($regis);
        
        // $request->session()->flash('success','Register Successfull , Please Login');

        return redirect('/')->with('success','Register Successfull , Please Login');
    }
}
