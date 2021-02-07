<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comment.comment', compact('comments'));
    }

    public function create()
    {
        return view('comment.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:255|string',
        ]);
        
        Comment::create([
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
        ]);

        return redirect()->route('home');
    }
}
