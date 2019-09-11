<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Repositories\Posts;
use App\Repositories\Users;
use App\Http\Requests\PostsRequest;
use Agreed; //Custom facade
class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(Posts $posts)
    {
        $posts = $posts->all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Users $users,PostsRequest $request) //Dependancy injection
    {
        $users->publish(new Post(request(['title', 'body'])));
        return redirect('/');

    }
    public function show(Post $post)
    {
        $agreed = Agreed::checkAgree();//Custom Facades to check user is aggreed or not.
        return view('posts.show', compact('post','agreed'));
    }
}
