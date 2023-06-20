<?php

namespace App\Http\Controllers;

use App\Models\Userhp;
use App\Models\Comment;
use App\Models\hp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

public function dashboard()
{
    $title = "Dashboard";
    $totalData = Userhp::count();
    $totalHp = hp::count();
    $totalComment = Comment::count();
    return view('dashboard-admin.dashboard', compact('totalData','totalHp','totalComment','title'));
}

}
