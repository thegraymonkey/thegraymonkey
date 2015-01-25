<?php namespace App\Http\Controllers;


use View;
use Request;
use Mail;
use Validator;

class SrbController extends Controller {


	public function index()
	{
		return view('srb.index', ['current_page'=>'srb']);
	}

}