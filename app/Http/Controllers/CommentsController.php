<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {
        $this->validate(request(),[
            'body' => 'required|min:2',
        ]);

        $user = auth()->id();
        //$post->addComment(request('body','user'));
        Comment::create([
           'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => $user,
        ]);
        return back();
    }
}
