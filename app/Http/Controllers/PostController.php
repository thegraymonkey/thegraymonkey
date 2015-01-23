<?php namespace App\Http\Controllers;

use App\Post;
use Request;
use Validator;
use Image;
use Auth;
use View;
use App\User;
use App\Http\Controllers\Controller;
use App;

class PostController extends Controller {
	
	public function index()
	{
		$posts = Post::all();

		return view('posts.index', ['posts'=>$posts, 'current_page'=>'posts']);
	}


	public function create()
	{
		return view('posts.create');
	}


	public function store()
	{

		if(Auth::check())
		{
		$input = Request::all();	

		$post = new Post;
		
		$post->title = $input['title'];

		$post->content = $input['content'];
			
		$post->description = $input['description'];

		$post->save();

		return redirect('posts')->with('message', 'Post created!');
		}
		return redirect('posts')->with('message', 'Login to save post!');
	}


	public function edit($id)
	{
		if(Auth::check())
		{
		$post = Post::find($id);

		return view('posts.edit', ['current_page'=>'posts/$id/edit'])->with('post', $post);
		}
		return redirect('posts')->with('message', 'Login to edit post!');
	
	}


	public function destroy($postId)
	{
		if(Auth::check())
		{
		if ($post = Post::find($postId))
		{
			$post->delete();

			return redirect('posts')->with('message', 'Post deleted!');
		}	
			return redirect('posts')->with('message', 'Post does not exist!');	
		}		
			return redirect('posts')->with('message', 'Login to delete!');	
	}


	

	public function update($id)
	{

		if(Auth::check())
		{
		$input = Request::all();

		$post = Post::find($id);

		if ($post)
		{
			$post->fill($input);

			$post->save();

			return redirect('posts')->with('message', 'Post updated!');
		}
			return redirect('posts')->with('message', 'Login to update post!');
		}
		return redirect('posts')->with('message', 'Updating failed!');
	}

}
