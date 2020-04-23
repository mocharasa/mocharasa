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
    $post = Post::where('status','publish')->paginate(1);
    return view('public.blog', compact('post'));
  }

}
