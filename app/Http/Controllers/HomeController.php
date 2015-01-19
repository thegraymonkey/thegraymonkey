<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home', ['current_page'=>'home']);
	}

}
