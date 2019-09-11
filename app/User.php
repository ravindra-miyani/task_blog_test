<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','agreed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        
        return $this->hasMany(Post::class);
    }

    public function publish($post)
    {
           // dd($this->posts());
        Post::create([
            'body' => $post['body'],
            'title' => $post['title'],
            'user_id' => auth()->id(),
        ]);
       // $this->posts()->save($post);
    }
}
