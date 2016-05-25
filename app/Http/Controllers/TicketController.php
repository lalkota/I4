<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use App\Ticket;
use App\Employee;
use Validator;
use Auth;

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
        $input = Input::all();

        

        $validation = Validator::make($input, Ticket::$rules);

        if ($validation->passes())
        {
         $file = array('attached_path' => Input::file('attached_path'));
         if (Input::file('attached_path')->isValid()) {

            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('attached_path')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $path = Input::file('attached_path')->move($destinationPath, $fileName); // uploading file to given path

          }
          $client_id = Auth::user()->ref_id;

          Ticket::create(array(
            'title' => $input["title"],
            'desc' => $input["desc"],
            'status' => $input["status"],
            'priority' => $input["priority"],
            'user_id' => $input["user_id"],
            'project_id' => $input["project_id"],
            'client_id' => $client_id,
            'attached_path' => $path

            ));

          return Redirect::route('admin.index');
        }

        return Redirect::route('client.index')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');    
      }

      public function show($id)
      {
          $tickets = Ticket::find($id);
         
          if (is_null($tickets)) {
              return Redirect::route('client.index');
          }
          return view('client.ticket_view', compact('tickets'));
      }

      /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
        public function edit($id)
        {
          $tickets = Ticket::find($id);

          if (is_null($tickets))
          {
            return Redirect::route('client.ticket_view');
          }
          return view('client.ticket_edit', compact('tickets'));
        }

        /**
       * Update the specified resource in storage.
       *
       * @param  int $id
       * @return Response
       */
      public function update($id)
      {
        $input = Input::all();
        $validation = Validator::make($input, Ticket::$rules);
        if ($validation->passes()) {
          $tickets = Ticket::find($id);
          $tickets->update($input);
          return Redirect::route('ticket.show', $id);
        }
        return Redirect::route('ticket.edit', $id)
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int $id
       * @return Response
       */
      public function destroy($id)
      {
        Ticket::find($id)->delete();
        
        return Redirect::route('admin.index');
      }


    }
