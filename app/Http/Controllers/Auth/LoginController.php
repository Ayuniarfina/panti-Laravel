<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function show()
    {
      return view('auth.login.show');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
