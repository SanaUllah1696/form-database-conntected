<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class PostController extends Controller
{
     public function index()
    {
        return view('blog');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('blog')->with('status', 'Blog Form Data Has Been inserted');
    }
}
