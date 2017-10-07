@extends('layouts.master')

@section ('content')

<form method="POST" action="/login">

{{ csrf_field() }}

    <h1>Sing in</h1>
    
    <div class="form-group">
    	<label for="email">Email:</label>
    	<input type="email" id="email" name="email" class="form-control"></input>
    </div>
    
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sing in</button>
    </div>
    
    
    @include ('layouts.errors')	
    
</form>

@endsection