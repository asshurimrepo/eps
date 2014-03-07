<?php

class Pharmacy extends Eloquent {
	protected $guarded = array();

	public static $rules = array();


	public function scopeCurrent($q)
	{
		return $q->where('user_id', Auth::user()->id)->first();
	}
}
