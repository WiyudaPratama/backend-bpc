<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegistrasiAdminController extends Controller
{
    public function index()
    {
        return view('auth.register-admin');
    }

    public function process(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $data = User::with(['member'])->where('email', $request->email)->first();
        Admin::create([
            'user_id' => $data->id,
            'member_id' => $data->member->id,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'status' => 'NOT-ACTIVE',
        ]);

        return redirect()->route('home');
    }
}
