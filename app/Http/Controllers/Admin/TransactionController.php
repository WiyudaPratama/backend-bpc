<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data = Transaction::all();
        return view('admin.transaction.transaction', compact('data'));
    }

    public function edit($id)
    {
        $data = Transaction::find($id);
        $status = ['SUCCESS', 'PENDING', 'FAILED'];
        return view('admin.transaction.edit', compact('data', 'status'));
    }

    public function update(Request $request, $id)
    {
        $data = Transaction::find($id);
        $item = $request->all();
        $data->update($item);
        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        $data = Transaction::find($id);
        $data->delete($data);
        return redirect()->route('transaction.index');
    }
}
