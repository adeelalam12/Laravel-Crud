<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

  public function index()
  {
    // $url = url('/reg');
    // $title = 'Registration';
    // $data = compact($url, $title);
    return view("Regisatration.Registartion");
  }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=>'required|confirmed',

        ]);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        auth()->attempt($request->only('email','password'));

        return redirect()->route('dashboard');
    }
}
