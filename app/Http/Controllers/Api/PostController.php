<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        $posts = PostResource::collection(Post::get());
        return $this->api($posts,null,200);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if($post){
            return $this->api(new PostResource($post),null,200);
        }
        return $this->api(null,"Not Found",404);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        if($post){
            return $this->api(new PostResource($post),null,201);
        }
        return $this->api(null,"The Post Not Save",400);
    }
}
