<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
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
        return $this->post($post);
        return $this->api(null,"Not Found",404);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'title'=>'required|max:255',
            'body'=>'required'
        ]);
        if($validator->fails()){
            return $this->api(null,$validator->errors(),400);
        }
        $post = Post::create($request->all());
        return $this->post($post);
    }

    public function update(Request $request ,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'title'=>'required|max:255',
            'body'=>'required'
        ]);
        if($validator->fails()){
            return $this->api(null,$validator->errors(),400);
        }
        $post = Post::find($id);
        if(!$post){
            return $this->api(null,"The Post Not Found",404);
        }
        $post -> update($request->all());
            return $this->post($post);
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        if(!$post){
            return $this->api(null,"The Post Not Found",404);
        }
        $post->delete();
        return $this->api(null,"The Post Delete",200);
    }
}
