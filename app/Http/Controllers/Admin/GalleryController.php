<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Gallery::all();
        return view('admin.gallery.gallery', compact('data'));
    }

    public function create()
    {
        return view('admin.gallery.tambah');
    }

    public function store(GalleryRequest $request)
    {
        $fileName = $request->gambar->getClientOriginalName();
        $fileName = explode('.', $fileName);
        $fileName = $fileName[0];

        $imgName = $fileName . '-' . date('Y-m-d') . '.' . strtolower($request->gambar->extension());
        $request->gambar->move(public_path('storage/gallery'), $imgName);
        Gallery::create([
            'image' => $imgName,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
        ]);

        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('admin.gallery.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'image|max:2048|mimes:jpg,jpeg,png',
            'judul' => 'required|string|max:50',
        ]);

        if(!$request->gambar) {
            $imgName = $request->gambar_lama;
        } else {
            $fileName = $request->gambar->getClientOriginalName();
            $fileName = explode('.', $fileName);
            $fileName = $fileName[0];

            $imgName = $fileName . '-' . date('Y-m-d') . '.' . strtolower($request->gambar->extension());
            $request->gambar->move(public_path('storage/gallery'), $imgName);
        }

        Gallery::find($id)->update([
            'image' => $imgName,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
        ]);

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->route('gallery.index');
    }
}