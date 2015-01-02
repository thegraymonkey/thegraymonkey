<?php namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller {
	
	public function index()
	{

		$posts = Post::all();

		return view('posts.index', ['posts'=>$posts, 'current_page'=>'posts.index']);
	}

	public function create()
	{

	}

	public function store()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}
}
