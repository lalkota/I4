<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoleadminController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('roleadmin.create_role_admin');
    }

    
}
