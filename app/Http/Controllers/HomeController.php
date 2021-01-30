<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Study::all();
        return view('home', compact('data'));
    }
}
