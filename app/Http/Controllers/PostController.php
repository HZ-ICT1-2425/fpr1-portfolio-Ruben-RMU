<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
use function Laravel\Prompts\confirm;

class PostController extends Controller
{
    /**
     * Display a listing of post.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new Post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store()
    {
        if (request()['title'] &&
            request()['body']) {
            $post = new Post();
            $post->title = request()['title'];
            $post->body = request()['body'];
            $post->save();
            return redirect()->route('posts');
        }

        return view('posts.create');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse
     */
    public function update(Post $post)
    {
        if (request()['title'] &&
        request()['body']) {
            $post->title = request()['title'];
            $post->body = request()['body'];
            $post->save();
            return redirect()->route('posts.show', $post);
        }

        return view('posts.edit', $post);
    }

    /**
     * Display the specified Post.
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
