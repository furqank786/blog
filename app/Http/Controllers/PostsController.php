<?php

namespace Blog\Http\Controllers;
use Blog\Post;

 
use Blog\Http\Requests\CreatePostRequest;
use Session;
use Illuminate\Support\Facades\DB;
use Blog\Http\Controllers\Controller;
use Request;// use Illuminate\Http\Request;
class PostsController extends Controller
{
    public function index()
    {
        //$posts = Post::orderBy('post_date', 'desc')->get();
        $posts = DB::table('posts')
                        ->join('users', function($join)
                        {
                            $join->on('posts.post_author', '=', 'users.id');
                        })
                        ->get();
        return view('posts.index',compact('posts'));
    }
    
    public function show($id)
    {
    $post = DB::table('posts')
                ->join('users', function($join)
                {
                    $join->on('posts.post_author', '=', 'users.id');

                })
                ->where('posts.id', $id)

                ->first();   
    
       return view('posts.show',  compact('post'));
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $input = Request::all();
        //exit;
        $input['post_date'] = date('Y-m-d');
        Post::create($input);
        return redirect('posts');
    }

    public function edit($id)
    {
        $post = Post::findorfail($id);

        return view('posts.edit',compact('post'));
    }

    public function update($id, CreatePostRequest $request)
    {
        $post = Post::findorfail($id);
        $post->update(Request::all());
        return redirect('posts');
    }
}
