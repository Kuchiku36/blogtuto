<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content'=>'required',
        ]);

        $comment = new Comment([
            'content'=>$request->content,
            'user_id'=>auth()->id(),
        ]);

        $post->comments()->save($comment);

        return redirect()->route('posts.show', $post->id)->with('success', 'Commentaire ajouté avec succès.');
    }
    
    
    //
}
