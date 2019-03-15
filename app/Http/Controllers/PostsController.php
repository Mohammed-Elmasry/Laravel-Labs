<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){

        return view('post.index',
        [
            'Posts'=> Post::all()
        ]);
    }

    public function create(){ //function to create a form
        return view('post.create');
    } 

    public function store(){ //function that stores in database
        Post::create(Request()->all());
    }
}
