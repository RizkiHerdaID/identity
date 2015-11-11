<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		# Load semua model yang dipakai pada class ini disini
		$this->load->library('email');
		$this->load->model('Model_mahasiswa','mahasiswa');
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
			return call_user_func_array(array($this, $method), $param);
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
		$data = $this->input->post();

		if(!empty($data))
		{

			unset($data['re-password']);
			unset($data['captcha']);
			$data = multisecure($data);

			if($this->mahasiswa->registrasi($data))
			{
				$password = $this->mahasiswa->get_password($data['nim']);
				$password = password_hash($password, PASSWORD_BCRYPT);
				
				$this->email->from('your@example.com', 'IDENTITY');
				$this->email->to($data['email']);
				$this->email->subject('Konfirmasi Registrasi IDENTITY');
				$this->email->message('Klik link dibawah ini untuk verifikasi <br>'.base_url().'f/registrasi/verifikasi?n='.$data['nim'].'&p='.$password);
				$this->email->send();

				redirect(base_url().'home/login');
			}
			else
			{
				echo "registrasi gagal";
			}
		}
		else
		{
			echo "data kosong";
		}
	}

	public function verifikasi()
	{
		$data['nim'] 		= $this->input->get('n');
		$data['password']	= $this->input->get('p');

		if($this->mahasiswa->verifikasi($data))
		{
			$data['pesan']		 = "Verifikasi email berhasil. Silahkan melakukan login";
			$data['nama_tombol'] = "Login";
			$data['link']		 = base_url().'/home/login';

			pesan_full($data);
		}
		else
		{
			die('Kode verifikasi salah');
		}
	}
		
}
