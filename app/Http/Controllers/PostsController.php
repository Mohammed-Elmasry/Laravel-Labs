<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index(){

        return view('post.index',
        [
            'Posts'=> Post::all()
        ]);
    }

    public function create(){ //function to create a form
        return view('post.create',[
            'users' => User::all(),

        ]);
    } 

    public function store(){ //function that stores in database
        Post::create(Request()->all());
        
    }
}
