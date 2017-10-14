<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    
    protected $fillable = ['name','email','password'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function post() {
        
        return $this->hasMany(Post::class);
    }
    
    public function comment() {
        
        return $this->hasMany(Comment::class);
    }
    
    public function say($body, $post_id) {
        
        $this->comment()->create(compact('body','post_id'));
    }
    
    public function publish(Post $post) {
        
       $this->post()->save($post);
    }
}
