<?php

namespace App\Http\Controllers;

use App\Models\Study;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Study::all();
        $comments = Comment::with(['user'])->offset(0)->limit(3)->get();
        return view('home', compact('data', 'comments'));
    }
}
