<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$search = (request() ->query('search')
    	if ($search){ 
    		
    		{
    			$posts = Post::where('title','LIKE',"%{$search}%") ->simplePaginate(3);
    		}
    		else {
    			$posts = Post::simplePaginate(3)
    		}
    	}
    	return view ('blog')
    	->with('posts',$posts);
    }
}
