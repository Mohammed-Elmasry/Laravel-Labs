<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    //functional
    public function index()
    {
        /*  return view('post.index',
         [
             'Posts' => Post::simplePaginate(4),
         ]); */

        $posts = DB::table('posts')->simplePaginate(5);
        // dd($posts);

        return view('post.index', ['Posts' => $posts]);
    }

    //functional
    public function create()
    { //function to create a form
        return view('post.create', [
            'users' => User::all(),
        ]);
    }

    //functional
    public function store()
    { //function that stores in database
        Post::create(Request()->all());

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
            'users' => User::all(),
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
