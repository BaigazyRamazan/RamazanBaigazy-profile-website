<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    //return all posts
    public function index(Request $request) {
    	$posts = Post::all();

    	return response($posts,200);
    }

    //return post which id is equal to post_id
    public function get_post(Request $request) {
    	$post = Post::find($request->post_id);

    	if ($post == null) {
    		return response(['message' => 'post not found'],404);
    	}

    	return response($post, 200);
    }
}
