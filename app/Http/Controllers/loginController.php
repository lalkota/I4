<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('login.login');
    }

    
}
