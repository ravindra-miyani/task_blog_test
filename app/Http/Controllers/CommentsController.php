<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Comment;
use App\Post;
use App\Repositories\Posts;



class CommentsController extends Controller
{
	public function __construct(){
		$this->middleware('checkagree');//custom Middleware
	}

    public function store(Posts $posts,Post $post)

    {	
    	$this->validate(request(),[
    			'body'=>'required'
    	]);
		$posts->addComment(request('body'),$post->id);
		return back();
    }
}
