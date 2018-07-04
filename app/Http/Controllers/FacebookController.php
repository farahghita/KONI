<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class FacebookController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('facebook', compact('posts', 'categories'));
    }

    public function edit(Post $post)
    {
      echo $post->id;
      //$categories = Category::all();

      //return view('facebook.edit', compact('post', 'categories'));
    }
    public function destroy(Post $post)
      {
        $post->delete();
        return redirect()->route('facebook');
      }
    
}
