<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
    
        return view('posts.index');
        
    }
    
    public function show(Post $post) {
        
        return view('posts.show',compact(post));
        
    }
}
