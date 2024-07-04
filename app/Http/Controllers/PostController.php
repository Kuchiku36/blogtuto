<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        
        return view('index',compact('posts'));    
    }
    
    public function show(Post $post)
    {
        $comments = Comment::where('post_id', $post->post_id);
        return view('show', compact('comments','post'));
    }
    //
}
