<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));

    }

    // public function create()
    // {
    //     $users = User::all();
    //     return view('users.create', compact('users'));

    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'id' => 'required',
            'name' => 'required |max:25',
            'email' => 'required |max:25',
            'role' => 'required |max:25',
        ]);
    
        $id = $request->id; // Assign a value to the $id variable
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
    
        return redirect('/users')->with('success', 'User created successfully.');
    }

    // public function show(string $id)
    // {
    //     return view('users.show', ['user' => User::findOrFail($id)]);

    // }

    public function edit(string $id)
    {
        return view('users.edit', ['user' => User::findOrFail($id)]);

    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            // 'user_id' => 'required',
            'name' => 'required |max:25',
            'email' => 'required |max:25',
            'role' => 'required |max:25',
        ]);

        User::whereId($id)->update($validatedData);
        return redirect('/users')->with('success', 'User updated successfully.');

    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/users')->with('success', 'User deleted successfully.');

    }
}

