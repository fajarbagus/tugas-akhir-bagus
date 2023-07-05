<?php

namespace App\Http\Controllers;
use App\Models\hp;

use Illuminate\Http\Request;

class HpController extends Controller
{
    public function show(){
        $title = "Data";
        $data = hp::all();
        return view('admin.data.index', ['handphones'=>$data], compact('title'));
    }

    public function create(){
        $title = "Data";
        return view('admin.data.create',  compact('title'));
    }

    public function store(Request $request){
        $title = "Data";
        $this->validate($request,[
            'merk' => 'required',
            'harga_hp' => 'required',
            'RAM' => 'required',
            'Internal' => 'required',
            'Kamera' => 'required',
            'Fingerprint' => 'required',
            'Sistem_Operasi' => 'required',
            'Type' => 'required',
            'File' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('File');
        $nama_file = time()."_".$file->getClientOriginalName();
        $path = 'data_file';
        $file->move($path,$nama_file); 
        hp::create([
            'merk' => $request->merk,
            'harga_hp' => $request->harga_hp,
            'RAM' => $request->RAM,
            'Internal' => $request->Internal,
            'Kamera' => $request->Kamera,
            'Fingerprint' => $request->Fingerprint,
            'Sistem_Operasi' => $request->Sistem_Operasi,
            'Type' => $request->Type,
            'File' => $nama_file,
        ]);
        return redirect()->route('data');
    }
    public function remove($id){
        $hps = hp::find($id)->delete();
        return redirect()->route('data');
    }
}
