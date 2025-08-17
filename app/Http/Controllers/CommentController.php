<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $post->comments()->create([
            'content' => $validated['comment'],
        ]);

        return redirect()->back()->with('success', 'Comment added!');
    }

    function create(){
        $post = Comment::create([
            'content' => 'My find post',
            'post_id' => 3,
        ]);

        return redirect('/posts');
    }
}
