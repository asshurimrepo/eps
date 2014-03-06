<?php

class Patient extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function fullname()
	{
		return $this->firstname.' '.$this->lastname;
	}
}
