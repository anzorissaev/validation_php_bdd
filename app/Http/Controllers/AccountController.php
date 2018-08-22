<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validateData = $request->validate([
            'lastname' =>  'required|alpha|string|max:45|min:2',
            'firstname' => 'required|alpha|string|max:45|min:2',
            'email' =>     'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);
        $user->update($validateData);

        return redirect()->route('user.edit');
    }
}
