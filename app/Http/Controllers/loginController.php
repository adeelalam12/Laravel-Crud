<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

  public function index(){
    return view('Regisatration.login');
  }
  public function store(Request $request)
  {
    $this->validate($request,[
        'email'=> 'required|max:255',
        'password'=> 'required',
    ]);
    if(!auth()->attempt($request->only('email','password'))){
        return back()->with('status','Invalid Login Detail.');
    }
    else{
        return redirect()->route('dashboard');
    }
  }
}
