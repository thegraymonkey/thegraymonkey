<?php namespace App\Http\Controllers;

use App\Cv;
use App\Post;
use Request;
use Validator;
use Image;
use Auth;
use View;
use App\User;
use App\Http\Controllers\Controller;
use App;

class CvController extends Controller {

	

	public function index()
	{ 
		$cvs = Cv::all();
		return view('cv.index', ['cvs'=>$cvs, 'current_page'=>'cv']);
	}

	public function create()
	{
		return view('cv.create');
	}

	public function store()
	{
		if(Auth::check())
		{
		$input = Request::all();	

		$cv = new Cv;

		$cv->fill($input);
		
		$cv->save();

		return redirect('cv')->with('message', 'CV created!');
		}
		return redirect('cv')->with('message', 'Please don\'t try that again');
	}

	public function edit($id)
	{
		$cv = Cv::find($id);

		return view('cv.edit', ['current_page'=>'cv/$id/edit'])->with('cv', $cv);
	}

	public function update($id)
	{
		if(Auth::check()){
		$input = Request::all();

		$cv = Cv::find($id);

		if ($cv)
		{
			$cv->fill($input);

			$cv->save();

			return redirect('cv')->with('message', 'Cv updated!');
		}
		return redirect('cv')->with('message', 'Login to update CV!');
	}
		return redirect('cv')->with('message', 'Updating failed!');
	}

}