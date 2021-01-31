<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuccessController extends Controller
{
    public function index()
    {
        return view('success');
    }

    // public function createJadwal(Request $request, $id)
    // {
    //     $request->validate([
    //         'jadwal' => 'required',
    //         'jam' => 'required',
    //     ]);

    //     $data = $request->all();
    //     $data['study_id'] = $id;
    //     Transaction::create($data);

    //     $slug = Transaction::with('study')->where('study_id', $id)->first();

    //     return redirect()->route('checkout', $slug->study->slug);
    // }

    public function successProcess($id)
    {
        $data = Study::find($id);
        Transaction::create([
            'study_id' => $id,
            'user_id' => Auth::user()->id,
            'transaction_total' => $data->harga,
            'transaction_status' => 'PENDING',
        ]);

        return redirect()->route('success-checkout');
    }
}
