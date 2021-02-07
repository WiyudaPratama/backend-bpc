<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();
        return view('admin.comment.comment', compact('data'));
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('comment.index');
    }
}
