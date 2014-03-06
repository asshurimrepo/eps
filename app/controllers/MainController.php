<?php

class MainController extends BaseController {

	public function getIndex()
	{
		// Session::forget('pres');
		return View::make('e_pres.wizard');
	}


	public function postStorePres()
	{
		Session::push('pres', Input::all());

		$pres = Session::get('pres');

		return View::make('e_pres.show_pres', compact('pres'));
		
	}

	public function postRemovePres($i)
	{
		Session::forget('pres.'.$i);
	}

}
