<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function __construct(){
        
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function create() {
    
        return view('sessions.create');
    }
    
    public function destroy() {
        session()->flash('message','See you, ' . auth()->user()->name);
        
        auth()->logout();
         
        return redirect('/');
    }
    
    public function store(Request $request) {
        
        $request->validate([
           'email' => 'required',
           'password' => 'required'
        ]);
        
        if (! auth()->attempt(request(['email','password']))) {
            
            return redirect()->back()->withErrors([
                'message' => 'Please check your credential and try again.'
            ]);
        }
        
        return redirect('/');
    }
}
