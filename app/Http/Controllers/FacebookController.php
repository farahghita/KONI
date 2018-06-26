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

        return view('facebook', compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {
        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'category_id' => request('category_id'),

        ]);

        return redirect('post');
    }
}
