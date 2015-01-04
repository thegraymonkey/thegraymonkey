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

		$rules = [
			'photo' => 'image|max:5024',
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			
			$image = Request::file('photo');
		
			// file name factory
			$fileName = time() . md5($image->getClientOriginalName());
			$fileExt = $image->getClientOriginalExtension();

			// image path
			$originalImagePath = public_path().'/upload/posts/' . $fileName . '.' . $fileExt;
			
			// save original
			//Image::make($image)
				//->widen(400)
				//->save($originalImagePath);

			$post = new Post;
		
			$post->title = $input['title'];

			$post->content = $input['content'];
			
			$post->description = $input['description'];

			$post->image_description = $input['image_description'];

			$post->filename = $fileName;

			$post->file_ext = $fileExt;

			$post->save();

			return redirect('posts')->with('message', 'Post created!');
		}	
		return redirect('posts')->withErrors($validation);
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
