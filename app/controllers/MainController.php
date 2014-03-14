<?php

class MainController extends BaseController {

	public function getIndex($id = null)
	{
		
		if(Auth::user()->type == 'pharm'):
		
			return Redirect::to('main/pharmacy');
		
		elseif(Auth::user()->type=="admin"):
				
			return Redirect::to('admin');

		endif;

		if($id){
			$patient = Patient::find($id);
			return View::make('main.index', compact('patient'));

		}

		return View::make('main.index');
	}

	public function getDeleteUser($id)
	{
		User::find($id)->delete();
		return Redirect::back()->with('suc', 'Account Successfully Deleted!');
	}


	public function getPharmacy()
	{
		$doctors = User::doctors()->get();
		return View::make('prescriptions.index', compact('doctors'));
	}

	public function postSendData()
	{
		$pres = Prescription::create(Input::get('data'));
	}

	public function getPrint($id)
	{
		$pres = Prescription::find($id);
		return View::make('print', compact('pres'));

	}

}
