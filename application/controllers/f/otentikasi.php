<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		# Load semua model yang dipakai pada class ini disini
		$this->load->model('Model_mahasiswa','mahasiswa');
		$this->load->model('Model_admin','admin');
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

		$data['nim'] 		= $this->input->post('nim');
		$data['password']	= $this->input->post('password');
		if(!empty($data))
		{
			$data = multisecure($data);
			if($this->mahasiswa->cek_login($data))
			{

				$result 	= $this->mahasiswa->get_datasession($data['nim']);	
				$session 	= array(
								'nim' 	=> $result['nim'], 
								'nama' 	=> $result['nama'],
								'auth'	=> TRUE,
								'ip'	=> $this->input->ip_address(),
								'level'	=> 2,
								);
				$this->session->set_userdata('user',$session);
				echo "login sukses";
				// redirect(base_url().'identity/dashboard');
			}
			else
			{
				echo "gagal";
				// pesan : password dan nim tidak cocok
			}
		}
		else
		{
			// pesan : data kosong
		}			
	}


	public function admin()
	{

		$data['nim'] 		= $this->input->post('nim');
		$data['password']	= $this->input->post('password');
		if(!empty($data))
		{
			$data = multisecure($data);
			if($this->admin->cek_login($data))
			{

				$result 	= $this->admin->get_datasession($data['nim']);	
				$session 	= array(
								'nim' 	=> $result['nim'], 
								'nama' 	=> $result['nama'],
								'auth'	=> TRUE,
								'ip'	=> $this->input->ip_address(),
								'level'	=> 1,
								);
				$this->session->set_userdata('user',$session);
				echo "login sukses";
				// redirect(base_url().'identity/dashboard');
			}
			else
			{
				echo "gagal";
				// pesan : password dan nim tidak cocok
			}
		}
		else
		{
			// pesan : data kosong
		}				
	}
	
		
}
