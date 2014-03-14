<?php

class MainController extends BaseController {

	public function getIndex($id = null)
	{

		if($id){
			$patient = Patient::find($id);
			return View::make('main.index', compact('patient'));

		}

		return View::make('main.index');
	}

	public function postSendData()
	{
		Prescription::create(Input::get('data'));
	}

}
