<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(2);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {
                $post->addMedia($file)->preservingOriginal()->toMediaCollection();
            }
        }


        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('posts.update', compact('post'));
    }

    public function update(Post $post)
    {
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/posts/'.$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/");
    }

}
