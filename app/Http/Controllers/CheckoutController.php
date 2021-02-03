<?php

namespace App\Http\Controllers;

use App\Models\Study;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($slug)
    {
        $data = Study::where('slug', $slug)->first();
        $transaction = Transaction::where('user_id', Auth::user()->id)->where('study_id', $data->id)->first();
        return view('checkout', compact('data', 'transaction'));
    }

    public function process($slug)
    {
        $data = Study::where('slug', $slug)->first();
        Transaction::create([
            'study_id' => $data->id,
            'user_id' => Auth::user()->id,
            'jadwal' => 'Pagi',
            'jam' => '08.30 - 10.30',
        ]);

        return redirect()->route('checkout',$data->slug);
    }

    public function updateJadwal(Request $request, $id)
    {
        $data = Transaction::find($id);
        Transaction::find($id)->update([
            'jadwal' => $request->jadwal,
            'jam' => $request->jam,
        ]);

        return redirect()->route('checkout', $data->study->slug);
    }
}
