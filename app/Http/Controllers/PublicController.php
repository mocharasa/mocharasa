<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tags;
Use App\User;
use Alert;

class PublicController extends Controller
{
  public function index()
  {
      $post = Post::paginate(1);
      return view('public.home', compact('post'));
  }

  public function blog()
  {
    $category_data = Category::all();
    $post = Post::where('status','publish')->latest()->paginate(1)->onEachSide(0);
    return view('public.blog', compact('post', 'category_data'));
  }

  public function viewblog($slug)
  {
    $category_data = Category::all();
    $post = Post::where('slug',$slug)->first();
    return view('public.viewblog', compact('post','category_data'));
  }

  public function category(category $category)
  {
    $category_data = Category::all();
    $data = $category->posts()->paginate(10)->onEachSide(1);
    return view('public.categoryblog', compact('data','category_data'));
  }

  public function cari(request $request)
  {
    $category_data = Category::all();
    $data = Post::where('judul', $request->cari)->orWhere('judul', 'like', '%'.$request->cari.'%')->paginate(10)->onEachSide(0);
    return view('public.categoryblog', compact('data','category_data'));
  }

}
