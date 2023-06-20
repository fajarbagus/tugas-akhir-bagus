<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userhp;

class UserController extends Controller
{
    function show(){
        $title = "User";
        $data = Userhp::all();
        return view('dashboard-admin.user.user', ['userhps'=>$data], compact('title'));
    }

    function create(){
        $title = "User";
        return view('dashboard-admin.user.create',  compact('title'));
    }

    function store(Request $request){
        $title = "User";
        userhp::create($request->all());
        return redirect()->route('useradd');
    }
}
