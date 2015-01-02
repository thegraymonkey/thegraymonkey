<?php namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller {

	public function index()
	{
		return view('contact.index', ['current_page'=>'contacts.index']);
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