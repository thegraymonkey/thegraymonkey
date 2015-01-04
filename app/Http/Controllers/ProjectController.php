<?php namespace App\Http\Controllers;

use App\Project;

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