<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Redirect;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	public function getLogin()
	{
		return view('auth.login', ['current_page' => 'auth.login']);
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');
	

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect('posts');
		}

		return redirect('/auth/login')
					->withInput($request->only('email'))
					->withErrors([
						'email' => 'These credentials do not match our records.',
					]);
	}
}
