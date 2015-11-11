<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		# Load semua model yang dipakai pada class ini disini
		// $this->load->model('Mexample');
	}


	/**
	* Method _remap
	*
	* Method remap adalah method yang
	* dijalankan setiap kali kontroller dijalankan.
	*/
	public function _remap($method, $param = array())
	{
		if (method_exists($this, $method)) 
		{
			
			call_user_func_array(array($this, $method), $param);
		}
		else
		{

			show_404();
		}
	}


	/**
	* Method index
	*
	* Method remap adalah method yang
	* dijalankan setiap kali kontroller dijalankan
	* setelah method _remap.
	*/
	public function index()
	{
		echo 'sukses';
		// $this->session->sess_destroy();
	}

	public function login()
	{

		$data['captcha'] = captcha();
		$this->load->view('Home/login',$data);
	}
	
	public function administrator()
	{

		$data['captcha'] = captcha();
		$this->load->view('view_loginAdmin',$data);
	}

	public function registrasi()
	{
		$data['captcha'] = captcha();
		$this->load->view('view_registrasi',$data);	
	}	
}
