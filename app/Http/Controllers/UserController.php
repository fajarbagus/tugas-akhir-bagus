<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    function show(){
        $title = "User";
        $data = User::all();
        return view('admin.user.index', ['user'=>$data], compact('title'));
    }

    function create(){
        $title = "User";
        return view('admin.user.create',  compact('title'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->route('user');
    }

    function delete($id){
        $hps = User::find($id)->delete();
        return redirect()->route('user');
 
    }
}
