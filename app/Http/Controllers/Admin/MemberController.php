<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'USER')->get();
        return view('admin.member.member', compact('data'));
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('admin.member.detail', compact('data'));
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete($data);
        return redirect()->route('member.index');
    }
}

