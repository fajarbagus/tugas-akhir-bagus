<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function show(){
        $title = "Comment";
        $data = Comment::All();
        return view('admin.comment.index', ['comments'=>$data], compact('title'));
    }
}
