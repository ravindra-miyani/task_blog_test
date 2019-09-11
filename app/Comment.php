<?php 
namespace App;

class Comment extends Model
{

	// post relationship 
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    // user relationship
    public function user()  
    {
    	return $this->belongsTo(User::class);
    }
}
