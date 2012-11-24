<?php

class Logout_Model
{
	
	public function __construct()
	{
	}
	
	public function logout()
	{
		//ska sluta session
		session_destroy();
	}
}