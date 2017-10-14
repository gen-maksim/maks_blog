@extends('layouts.master')

@section ('content')

	<h1>{{ $post->title }}</h1>
	@if (count($post->tag))
		
		@foreach ($post->tag as $tag)
			<li>
    			<a href="/posts/tags/{{ $tag->name }}">
    				{{ $tag->name }}
    			</a>
			</li>
		@endforeach
		
	@endif
	
	{{ $post->body }}
	
	<hr>
	
	<div class="comments">
    	<ul class="list-group">
    		@foreach ($post->comments as $comment)
    			   		
    			<li class="list-group-item">
    				<strong>
    				{{ $comment->created_at->diffForHumans() }} {{ $comment->user->name }} said: &nbsp;
    				</strong>
    				{{ $comment->body }}
    			</li>
    		
    		@endforeach
    	</ul>
	</div>
	
	<hr>
	
	<form method="POST" action="/posts/{{ $post->id}}/comment">

         {{ csrf_field() }}
        
        <div class="form-group">
			<textarea name="body" placeholder="Your comment here." class="form-controll" required></textarea>
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Say</button>
        </div>
        
        @include('layouts.errors')
    
	</form>
	
    
@endsection