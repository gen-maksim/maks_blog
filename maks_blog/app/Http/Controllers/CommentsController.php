<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    
    public function store(Post $post){
        
        
        $this->validate(request(), ['body' => 'required|min:2']);
        auth()->user()->say(request('body'), $post->id);
        
        return back();
    }
    
}
