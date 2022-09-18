<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{

    public function index(Request $request)
    {
        return view('view_login');
    }

    public function register(Request $request)
    {
        return view('view_register');
    }

}
