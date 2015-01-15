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
		$input = Request::all();	

		$post = new Post;
		
		$post->title = $input['title'];

		$post->content = $input['content'];
			
		$post->description = $input['description'];

		$post->save();

		return redirect('posts')->with('message', 'Post created!');
		
	}


	public function edit($id)
	{
		$post = Post::find($id);

		return view('posts.edit', ['current_page'=>'posts/$id/edit'])->with('post', $post);
	}


	public function destroy($postId)
	{

		if ($post = Post::find($postId))
		{
				$post->delete();

				return redirect('posts')->with('message', 'Post deleted!');
		}			
				return redirect('posts')->with('message', 'Post does not exist!');	
	}


	

	public function update($id)
	{
		$input = Request::all();

		$post = Post::find($id);

		if ($post)
		{
			$post->fill($input);

			$post->save();

			return redirect('posts')->with('message', 'Post updated!');
		}
		return redirect('posts')->with('message', 'Updating failed!');
	}

}
