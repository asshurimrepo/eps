<?php

class Prescription extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function patient()
	{
		return $this->belongsTo('Patient');
	}

	public function drug()
	{
		return $this->belongsTo('Drug');
	}

	public function sig()
	{
		
	}
}
