<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;


class PostController extends Controller
{
    //
    public function index(){
      return PostResource::collection(Post::paginate(2));
    }

    public function show($post){
      return new PostResource(Post::find($post));
    }
}
