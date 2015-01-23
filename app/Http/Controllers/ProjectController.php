<?php namespace App\Http\Controllers;

use App\Project;
use Request;
use Auth;
use Validator;
use Image;
use View;
use App\User;
use App\Http\Controllers\Controller;
use App;
use Intervention\Image\ImageManager;


class ProjectController extends Controller {

	public function index()
	{
		$projects = Project::all();

		return view('projects.index', ['projects'=>$projects, 'current_page'=>'projects']);
	}

	public function create()
	{

	}

	public function store()
	{
		// validation
		$input = Request::all();

		$rules = [
			'photo' => 'image|max:5024',
			'content' => 'required|min:5',
			'title' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			
			$image = Request::file('photo');
		
			// file name factory
			$fileName = time() . md5($image->getClientOriginalName());
			$fileExt = $image->getClientOriginalExtension();

			// image path
			$originalImagePath = public_path().'/upload/projects/' . $fileName . '.' . $fileExt;
			


			$imager = new ImageManager;
			$imager->make($image)
				  ->widen(400)
				  ->save($originalImagePath);
			// save original
			//Image::make($image)
			//	->widen(400)
			//	->save($originalImagePath);

			$project = new Project;
		
			$project->title = $input['title'];

			$project->description = $input['description'];

			$project->content = $input['content'];

			$project->filename = $fileName;

			$project->file_ext = $fileExt;

			$project->img_description = $input['img_description'];

			$project->link = $input['link'];

			$project->user_id = Auth::user()->id;

			$project->save();

			return redirect('projects')->with('message', 'Project recorded!');
		}	

		return redirect('projects')->withErrors($validation);
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

	protected function assignImage(Project $project, $file)
	{
		
		if ($file)
		{
			$ext = $file->getClientOriginalExtension();

			//!!
			$project->file_extension = $ext;

			$path = public_path() . '/upload/projects/';

			$filename = time() . md5($image->getClientOriginalName());

			//!!
			$project->filename = $filename;
			

			$imager = new ImageManager;
			$imager->make($image)
				  ->widen(400)
				  ->save($originalImagePath);
			 //save original
			//Image::make($image)
			//	->widen(400)
			//	->save($originalImagePath);
		}


		return $project;
	}

}