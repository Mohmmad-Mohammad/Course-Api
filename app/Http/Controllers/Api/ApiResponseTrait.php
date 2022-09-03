<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PostResource;

trait ApiResponseTrait
{
    public function api($data = null,$massage = null,$status = null)
    {
        $array = [
            'data'=>$data,
            'massage' => $massage,
            'status'=>$status
        ];
        return response($array,$status);
    }

    public function post($post)
    {
        if($post){
            return $this->api(new PostResource($post),null,201);
        }
        return $this->api(null,"The Post Not Save",400);
    }
}