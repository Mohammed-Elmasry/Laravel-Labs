<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    function index(){

        return view('post.index',
        [
            'Posts'=> Post::all()
        
        ]);
    }
}
