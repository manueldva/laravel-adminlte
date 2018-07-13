<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use Alert;

use App\Http\Controllers\Controller;
use App\Client;

use App\Helpers\Animate;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //$clients = Client::orderBy('id', 'DESC')->paginate();
 

        $clients = Client::type($request->get('type'), $request->get('val'))->paginate(10);
        $clients->setPath('clients');

       return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        $clients = Client::create($request->all());
        Alert::success('Cliente creado con exito');
        return redirect()->route('clients.edit', $clients->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);


        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);


        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, $id)
    {
        $client = Client::find($id);

        $client->fill($request->all())->save();

        Alert::success('Cliente actualizado con exito');
        return redirect()->route('clients.edit', $client->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        /*if(Reception::where('client_id', $id)->first()) 
        {
            Alert::error('No se puede eliminar el registro');
            return back();
        }*/

        Client::find($id)->delete();

        Alert::success('Eliminado correctamente');
        return back();
    }
}
