<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use App\Ticket;
use Validator;

use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    /**
     * show view after login
     */
    public function index()
    {

        return view('client/create_ticket');
    }
    
     public function store()
    {
         $file = input::file('attached_path');
          

        $input = Input::all();
        $file = Input::get('attached_path');
        dd($file);
        $validation = Validator::make($input, Ticket::$rules);
        
        if ($validation->passes())
        {
          
         
          Ticket::create($input);

          return Redirect::route('admin.index');
      }

      return Redirect::route('client.index')
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');    
  }


}
