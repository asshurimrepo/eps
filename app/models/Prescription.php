<?php

class Prescription extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function scopeMyPharmacy($q)
	{
		return $q->where('pharmacy_id', Pharmacy::where('user_id', Auth::user()->id)->first()->id);
	}

	public function patient()
	{
		return $this->belongsTo('Patient');
	}

	public function medication()
	{
		return $this->belongsTo('Medication');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}
