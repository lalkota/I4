<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Notification;

class NotificationController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        //$id = Notification::create()->id;
        return view('notification.notification_send');
    }

    
}