<?php

namespace App\Http\Controllers\Admin;

use App\Models\Study;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudyRequest;
use Illuminate\Support\Str;

class StudyController extends Controller
{
    public function index()
    {
        $data = Study::all();
        return view('admin.study.study', compact('data'));
    }

    public function create()
    {
        return view('admin.study.create');
    }

    public function store(StudyRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->kelas);

        Study::create($data);
        return redirect()->route('study.index');
    }

    public function edit($id)
    {
        $data = Study::find($id);
        return view('admin.study.edit', compact('data'));
    }

    public function update(StudyRequest $request, $id)
    {
        $study = Study::find($id);
        $data = $request->all();
        $study->update($data);
        return redirect()->route('study.index');
    }

    public function destroy($id)
    {
        $data = Study::find($id);
        $data->delete($data);
        return redirect()->route('study.index');
    }
}
