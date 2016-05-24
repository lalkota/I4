<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotificationController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('notification.notification_send');
    }

    
}