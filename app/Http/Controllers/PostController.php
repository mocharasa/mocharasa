<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Alert;
Use Auth;
use Input;
use App\Post;
use App\Tags;
use App\Category;
use App\User;

class PostController extends Controller
{

    public function index()
    {
      $post = Post::paginate(10);
      return view('admin.post.index', compact('post'));
    }


    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('admin.post.tambah', compact('category','tags'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
          'judul' => 'required',
          'id_category' => 'required',
          'content' => 'required',
          'gambar' => 'required'
        ]);
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $post = Post::create([
                  'users_id' => Auth::id(),
                  'judul' => $request->judul,
                  'id_category' => $request->id_category,
                  'content' => $request->content,
                  'slug' => Str::slug($request->judul),
				  'status' => $request->status,
                  'gambar' => 'public/uploads/posts/'.$new_gambar
        ]);
        $gambar->move('public/uploads/posts', $new_gambar);
        $post->tags()->attach($request->tags);        
        Alert::success('Added', 'Data berhasil ditambahkan!');
        return redirect()->route('post.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $tags = Tags::all();
      $category = Category::all();
      $post = Post::findOrFail($id);
      return view('admin.post.edit', compact('category','tags','post'));
    }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
            'judul' => 'required',
            'id_category' => 'required',
            'content' => 'required'
      ]);
      $post = Post::findOrFail($id);
      if($request->has('gambar')){
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $gambar->move('public/uploads/posts', $new_gambar);
        $post_data = [
                  'judul' => $request->judul,
                  'id_category' => $request->id_category,
                  'content' => $request->content,
                  'slug' => Str::slug($request->judul),
				  'status' => $request->status,
                  'gambar' => 'public/uploads/posts/'.$new_gambar
                  ];
      } else {
        $post_data = [
                  'judul' => $request->judul,
                  'id_category' => $request->id_category,
                  'content' => $request->content,
				  'status' => $request->status,
                  'slug' => Str::slug($request->judul)
                  ];
      }
      $post->tags()->sync($request->tags);
      $post->update($post_data);      
      Alert::success('Saved', 'Data berhasil disimpan!');
      return redirect()->route('post.index');
    }


    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post->delete();
      Alert::warning('Trashed', 'Data telah masuk ke tong sampah.');
      return redirect()->route('post.index');
    }

    public function trash()
    {
      $post = Post::onlyTrashed()->paginate(10);
      return view('admin.post.trash', compact('post'));
    }

    public function restore($id)
    {
      $post = Post::withTrashed()->where('id',$id)->first();
      $post->restore();
      alert()->info('Restored','Data telah direstore');
      return redirect()->route('post.trash');
    }

    public function kill($id)
    {
      $post = Post::withTrashed()->where('id',$id)->first();
      $post->forceDelete();
      Alert::error('Deleted', 'Data telah dihapus!');
      return redirect()->route('post.trash');
    }
}
