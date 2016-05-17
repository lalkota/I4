<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Validator;
use App\Client;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * show view after login
     */


    public function index()
    {

        $clients = Client::all();
        return view('client.client_list', compact('clients'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('client.client_registration');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */

    public function store()
    {
    //
        $input = Input::all();

        $validation = Validator::make($input, Client::$rules);

        if ($validation->passes())
        {
            Client::create($input);

            return Redirect::route('client.index');
        }

        return Redirect::route('client.create')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');    
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
      $client = Client::find($id);
      if (is_null($client))
      {
          return Redirect::route('client.index');
      }
      return view('client.client_view', compact('client'));    
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $client = Client::find($id);
        if (is_null($client))
        {
          return Redirect::route('client.index');
        }
        return view('client.client_edit', compact('client'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id)
    {
    $input = Input::all();
    $validation = Validator::make($input, Client::$rules);
    if ($validation->passes())
    {
      $client = Client::find($id);
      $client->update($input);
      return Redirect::route('client.show', $id);
    }
      return Redirect::route('client.edit', $id)
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');    
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return Redirect::route('client.index');    
    }



    public function ticketshow()
    {
        return view('client.ticket_status');
    }

    public function createticketshow()
    {
        return view('client.create_tickets');
    }
}
