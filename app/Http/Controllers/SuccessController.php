<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuccessController extends Controller
{
    public function index()
    {
        return view('success');
    }

    public function successProcess($id)
    {
        $data = Transaction::find($id);
        $data->update([
            'transaction_total' => $data->study->harga,
            'transaction_status' => 'PENDING',
        ]);

        return redirect()->route('success-checkout');
    }
}
