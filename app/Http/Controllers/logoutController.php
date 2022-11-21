<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index()
    {
        Auth::logout();
        return view('landingpage');
    }
}
