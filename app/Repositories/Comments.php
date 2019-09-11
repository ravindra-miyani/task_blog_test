<?php 

namespace App\Repositories;
use App\Comment;


class Comments{
    private $comment;

    public function __construct(){
        $this->comment = new Comment();
    }

    public function post(){
        return $this->comment->post();
    }

    public function user(){
        return $this->comment->user();
    }
}