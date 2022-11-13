<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $model_post = new Post;
        $data=$model_post->all();
        return view('add-blog-post-form',['data'=>$data]);
    }
    
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    public function read()
    {
        $model_post = new Post;
        $data=$model_post->all();
        //echo "<pre>":
        return view ('read',['data'=>$data]);
    }
}