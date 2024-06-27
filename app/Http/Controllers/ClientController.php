<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::all();
        return view('clients.index', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clients = Client::all();
        return view('clients.create', compact('clients'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'client_id' => 'required',
            'client_name' => 'required |max:25',
            'client_email' => 'required |max:25',
            'client_phone' => 'required |max:25',
            'client_project' => 'required |max:25',
        ]);

        Client::create($validatedData);
        return redirect('/clients')->with('success', 'Client created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('clients.show', ['client' => Client::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('clients.edit', ['client' => Client::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'client_id' => 'required',
            'client_name' => 'required |max:25',
            'client_email' => 'required |max:25',
            'client_phone' => 'required |max:25',
            'client_project' => 'required |max:25',
        ]);

        Client::whereId($id)->update($validatedData);
        return redirect('/clients')->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Client::destroy($id);
        return redirect('/clients')->with('success', 'Client deleted successfully.');
    }
}
