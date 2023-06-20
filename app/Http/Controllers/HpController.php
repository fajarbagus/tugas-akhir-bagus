<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hp;

class HpController extends Controller
{
    function show(){
        $title = "Data";
        $data = hp::all();
        return view('dashboard-admin.data.data', ['handphones'=>$data], compact('title'));
    }

    function create(){
        $title = "Data";
        return view('dashboard-admin.data.create',  compact('title'));
    }

    function store(Request $request){
        $title = "Data";
        hp::create($request->all());
        return redirect()->route('contoh');
    }
}
