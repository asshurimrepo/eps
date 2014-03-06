<?php

class AuthController extends BaseController {

	

	public function postCheck()
	{
		$c = [
			'username' => Input::get('username'),
			'password' => Input::get('password')
		];

		if(Auth::attempt($c)){
			return Redirect::to('/');
		}

		return Redirect::back()->with('err', 'Access Denied!');
	}


	public function getLogin()
	{
		return View::make('login');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::back()->with('suc', 'You Have Logout!');

	}

}
