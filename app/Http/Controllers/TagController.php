<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Alert;
use Input;
use App\Tags;

class TagController extends Controller
{

    public function index()
    {
      $tags = Tags::paginate(10)->onEachSide(1);
      return view('admin.tag.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tag.tambah');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        $tags = Tags::create([
              'name' => $request->name,
              'slug' => Str::slug($request->name)
        ]);
        $notification = array(
          'message' => 'Data berhasil disimpan!',
          'alert-type' => 'success'
        );
        Alert::success('Added', 'Data berhasil ditambahkan!');
        return redirect()->route('tag.index')->with($notification);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tags = Tags::findOrFail($id);
        return view('admin.tag.edit', compact('tags'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
              'name' => 'required|min:3'
        ]);
        $tag_data = [
          'name' => $request->name,
          'slug' => Str::slug($request->name)
        ];
        Tags::whereId($id)->update($tag_data);
        Alert::success('Saved', 'Data berhasil disimpan!');
        return redirect()->route('tag.index');
    }


    public function destroy($id)
    {
      $tags = Tags::findOrFail($id);
      $tags->delete();
      Alert::error('Deleted', 'Data berhasil dihapus!');
      return redirect()->route('tag.index');
    }
}
