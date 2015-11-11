<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	public function index()
	{
		
		$this->errors->page('404');
		$this->session->sess_destroy();
	}

	public function enkrip($data)
	{
		$p1 = password_hash($data,PASSWORD_BCRYPT);
		echo $p1;
	}
}
