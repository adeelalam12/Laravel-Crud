<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function index()
    {
        return redirect('home')->with(Auth::logout());
    }
}
