<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Notification;
use App\NotificationTo;
use App\Employee;
use Input;
use Validator;
use Auth;

class NotificationController extends Controller
{
    /**
     * show view after login
     */
    public function index()
    {
        //$id = Notification::create()->id;
        $user_id = Auth::user()->id;
        $notifications = NotificationTo::where('user_id',$user_id)->get();
        $notifications = NotificationTo::where('user_id',$user_id)->paginate(10);
        
        return view('notification.notification_list', compact('notifications'));
    }

    public function create()
    {
        $employees = Employee::all(); 
        $notification = Notification::all();
        return view('notification.notification_send', compact('notification','employees'));
    }

    public function store()
    {

        $user_id = Auth::user()->id;
        $input = Input::all();
        $input = array_reverse($input);

        $validation = Validator::make($input, Notification::$rules);
        if ($validation->passes()) {
            array_pop($input);
            $notify_to = array_pop($input);
            $input['from'] = $user_id;
            $id = Notification::create($input)->id;

            foreach($notify_to as $to) {
                NotificationTo::create(array('notification_id'=>$id,'user_id'=>$to));
            }
            return Redirect::route('notification.index');
        }

        return Redirect::route('notification.create')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    }

    public function show($user_id)
    {
        $notification = NotificationTo::find($user_id);
        

        if (is_null($notification))
        {
           return Redirect::route('notification.index');
        }
        return view('notification.notification_view', compact('notification')); 
    }

}