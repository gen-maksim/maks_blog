@extends('layouts.master')



@section ('content')

<h1>Registration</h1>

<hr>

<form method="POST" action="/register">

{{ csrf_field() }}
	
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    
    <div class="form-group">
    	<label for="email">Email:</label>
    	<input type="email" id="email" name="email" class="form-control" required></input>
    </div>
    
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    
    <div class="form-group">
        <label for="password_confirmation">Password-confirmation:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sing up</button>
    </div>
    
    @include('layouts.errors')
    
</form>

@endsection