<?php

class MainController extends BaseController {

	public function getIndex()
	{
		Session::forget('pres');

		if(Auth::user()->type == 'doc'){
			$to_load_view = 'e_pres.wizard';
		}else{
			$to_load_view = 'e_pres.list';
		}


		return View::make($to_load_view);
	}


	public function postSubmitPrescription()
	{
		$patient_data = Input::only('firstname', 'middlename', 'lastname', 'age', 'gender');

		$p = Patient::create($patient_data);

		foreach (Session::get('pres') as $key => $value) {
			$pres_data = $value;
			$pres_data['pharmacy_id'] = Input::get('pharmacy_id');
			$pres_data['patient_id'] = $p->id;
			$pres_data['user_id'] = Auth::user()->id;

			Prescription::create($pres_data);
		}
		
		// return Input::all();
		return Redirect::back()->with('suc', '<b>Prescription has been successfully Submitted!</b>');
	}


	// Ajax

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
