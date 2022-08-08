<?php

class model_login extends CI_Model
{
	public $_table = "admin";

	public function login() 
	{
		$username = $this->input->$_POST('username', TRUE);
		$password = md5($this->input->$_POST('password', TRUE));
		
	}
	public function getadmin($username, $password)
	{ }
}


