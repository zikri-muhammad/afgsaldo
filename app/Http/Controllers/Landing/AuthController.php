<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Index()
    {
        // echo 'ok';
        return view('front.auth.login');
    }

    public function register()
    {
        return view('front.auth.register');
    }
}
