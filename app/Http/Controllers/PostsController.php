<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostsController extends Controller
{
    public function index(Request $request)
    {   
        $gratitude = $request->header('key');

        return Post::where(function($query) use ($request){

            //Custom query goes here

        })->orderBy('published_at', 'DESC')->whereStatus(2)->paginate();
    }
}

