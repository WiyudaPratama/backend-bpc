<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('admin.admin.admin', compact('data'));
    }

    public function show($id)
    {
        $data = Admin::find($id);
        return view('admin.admin.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        $status = ['ACTIVE', 'NOT ACTIVE'];
        return view('admin.admin.edit', compact('data', 'status'));
    }

    public function update(Request $request, $id)
    {
        $data = Admin::find($id);
        $data->update(['status' => $request->status,]);

        if(Admin::where('status', 'ACTIVE')) {
            User::find($data->user_id)->update([
                'role' => 'ADMIN',
            ]);
        }

        return redirect()->route('admin.index');
    }
}
