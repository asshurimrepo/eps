<?php

class AuthController extends BaseController {

	public function getIndex()
	{
		return Redirect::to('main');
	}

	public function getLogin()
	{
		// User::create(['password'=>Hash::make('secret')]);
		return View::make('login');
	}

	public function getOut()
	{

		Auth::logout();
		return Redirect::back()->with('suc', 'You Have Logout!');
		
	}

	public function postCheck()
	{
		if(Auth::attempt(Input::all())){
			return Redirect::to('main');
		}

		return Redirect::back()->with('err', 'Login Failed!');
	}
}
