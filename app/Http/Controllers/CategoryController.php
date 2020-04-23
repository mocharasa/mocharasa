<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Alert;
use Input;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::paginate(10);
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        $category = Category::create([
              'name' => $request->name,
              'slug' => Str::slug($request->name)
        ]);
        $notification = array(
        	'message' => 'Data berhasil disimpan!',
        	'alert-type' => 'success'
        );
        Alert::success('Added', 'Data berhasil ditambahkan!');
        return redirect()->route('category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
              'name' => 'required|min:3'
        ]);
        $category_data = [
          'name' => $request->name,
          'slug' => Str::slug($request->name)
        ];
        Category::whereId($id)->update($category_data);
        Alert::success('Saved', 'Data berhasil disimpan!');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Alert::error('Deleted', 'Data berhasil dihapus!');
        return redirect()->route('category.index');
    }
}
