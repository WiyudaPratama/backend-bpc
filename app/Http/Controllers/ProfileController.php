<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $jurusan = ['Teknik Informatika', 'Sistem Informasi', 'Management Informatika'];
        $data = Member::with(['user'])->where('user_id', Auth::user()->id)->first();
        return view('profile.profile', compact('data', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|mimes:jpg,jpeg,png|image|max:2048',
            'nama' => 'required|string|max:50',
            'npm' => 'numeric',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($request->id_user)],
            'jurusan' => 'string|max:30',
            'kelas' => 'string:max:10',
            'no_telp' => 'numeric',
            'alamat' => 'string|max:255',
        ]);

        if($request->foto) {
            $fileName = $request->foto->getClientOriginalName();
            $fileName = explode('.', $fileName);
            $fileName = strtolower($fileName[0]);

            $imgName = $fileName . '-' . date('Y-m-d') . '.' . $request->foto->extension();
        } else {
            $imgName = null;
        }

        Member::find($id)->update([
            'profil' => $imgName,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        User::find($request->id_user)->update([
            'name' => $request->nama,
            'email' => $request->email
        ]);
        
        return redirect()->route('profile');
    }
}
