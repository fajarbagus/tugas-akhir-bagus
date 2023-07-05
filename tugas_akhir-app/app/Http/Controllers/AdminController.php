<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\hp;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $title = "Dashboard";
        $totalData = user::count();
        $totalHp = hp::count();
        $totalComment = Comment::count();
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            
            if($usertype=='user'){
                return view('dashboard');
            }
            else if($usertype=='admin'){
                return view('admin.dashboard',compact('totalData','totalHp','totalComment','title'));
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function Post(){
        return view('post');
    }
}
