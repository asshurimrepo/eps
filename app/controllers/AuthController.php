<?php

class AuthController extends BaseController {

	public function getIndex()
	{
		
	}

	public function getLogin()
	{
		return View::make('login');
	}

}
