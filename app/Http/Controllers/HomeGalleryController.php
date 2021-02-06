<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeGalleryController extends Controller
{
  public function index()
  {
      $data = Gallery::all();
      return view('gallery', compact('data'));
  }
}
