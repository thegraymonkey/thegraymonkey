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

	public function edit($id)
	{
		if(Auth::check())
		{
		$project = Project::find($id);

		return view('projects.edit', ['current_page'=>'projects'])->with('project', $project);
		}
		return redirect('projects')->with('message', 'Login to edit project!');	
	}

	
	public function update($id)
	{
		$input = Request::all();

		$rules = [
			'photo' => 'image|max:5024',
			'content' => 'required|min:5',
			'title' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			$project = Project::find($id);

			$image = Request::file('photo');

			if ($project)
			{
				$project->fill($input);

				$project = $this->assignImage($project, $file);

				$project->save();

				return redirect('projects')->with('message', 'Project updated!');
			}
			return redirect('projects')->with('message', 'Project does not exist!');			
		}
		return redirect(route('projects'))->withErrors($validation);
	}
	

	public function destroy($projectId)
	{

		if ($project = Project::find($projectId))
		{
			if (Auth::user()->id)
			{
				$project->delete();

				return redirect('projects')->with('message', 'Project deleted!');
			}
			return redirect('projects')->with('message', 'You do not have rights to delete this project!');
		}
		return redirect('projects')->with('message', 'Project does not exist!');
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
				   ->save($originalImagePath);

				

			 //save original
			//Image::make($image)
			//	->widen(400)
			//	->save($originalImagePath);
		}


		return $project;
	}

}