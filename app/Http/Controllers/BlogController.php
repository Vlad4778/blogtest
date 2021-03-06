<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index()
    {
    	$posts = Post::latest()->simplePaginate(3);
    	return view('blog.index',compact('posts'));
    }
}
