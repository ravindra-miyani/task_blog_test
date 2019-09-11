<?php

namespace App\Repositories;
use App\Post;
class Posts{
    protected $post;
    public function __construct(){
        $this->post = new Post();
    }

    public function all(){
       return Post::getall();
    }

    public function addComment($body,$post_id){
        return $this->post->addComment($body,$post_id);
    }
     
   /* public function user(){
        return $this->post->user();
    }*/

}