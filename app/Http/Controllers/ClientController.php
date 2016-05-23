<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Validator;
use App\Client;
use App\Role;
use Illuminate\Support\Facades\Redirect;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * @return mixed
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

        if ($validation->passes()) {
            $id = Client::create($input)->id;
            \App\User::create(array(
                'username' => $input["name"],
                'email' => $input["email"],
                'password' => 'client',
                'role_id' => Role::where('title', 'client')->get()->toArray()[0]['id'],
                'ref_id' => $id
            ));

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
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        if (is_null($client)) {
            return Redirect::route('client.index');
        }
        return view('client.client_view', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        if (is_null($client)) {
            return Redirect::route('client.index');
        }
        return view('client.client_edit', compact('client'));
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
        $validation = Validator::make($input, Client::$rules);
        if ($validation->passes()) {
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
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        $role_id= Role::where('title', 'client')->get()->toArray()[0]['id'];
        User::where(array('role_id'=>$role_id,'ref_id'=>$id))->get()[0]->delete();
        return Redirect::route('client.index');
    }


    /**
     * @return mixed
     */
    public function ticketshow()
    {
        return view('client.ticket_status');
    }

    /**
     * @return mixed
     */
    public function createticketshow()
    {
        return view('client.create_tickets');
    }
}
