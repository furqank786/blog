<?php

namespace Blog\Http\Controllers;
use Blog\Post;

 
use Blog\Http\Requests\CreatePostRequest;
use Session;
use Illuminate\Support\Facades\DB;
use Blog\Http\Controllers\Controller;
use Request;// use Illuminate\Http\Request;
use \URL;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 'index']);
    }

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
        if(Auth::guest()){
            return redirect('posts');
        }
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
        \Session::flash('post_updated','Post has been successfully updated!');
        if(strstr(URL::previous(),'editpost')){
            return redirect('posts/all');
        } else {
            return view('posts');
        }
        
        return redirect('posts');
    }
    
    public function all()
    {
        //$posts = Post::orderBy('post_date', 'desc')->get();
        $posts = DB::table('posts')
                        ->join('users', function($join)
                        {
                            $join->on('posts.post_author', '=', 'users.id');
                        })
                        ->select('posts.*','users.id as userid','users.firstname','users.lastname')
                        ->where('posts.post_status', '=', 'active')
                        ->get();
                        //echo '<pre>';print_r($posts);
        return view('posts.all',compact('posts'));
    }
    
    public function editpost($id)
    {
        $id = base64_decode($id);
        $post = Post::findorfail($id);

        return view('posts.editpost',compact('post'));
    }
    
    public function deletepost($id)
    {  
       if($id){
            $id = base64_decode($id);
            $post = \Blog\Post::findOrFail($id);
              $post->update([
                 'post_status' => 'inactive'
             ]);//->save();
             \Session::flash('delete_post','Post has been successfully deleted!');
             return redirect('posts/all');
       }
    }
}
