<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($slug)
    {
        $data = Study::where('slug', $slug)->first();
        return view('checkout', compact('data'));
    }
}
