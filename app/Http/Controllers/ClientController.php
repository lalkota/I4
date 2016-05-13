<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('client.client_registration');
    }

    public function ticketshow()
    {
        return view('client.ticket_status');
    }
}
