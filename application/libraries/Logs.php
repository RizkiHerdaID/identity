<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* Kelas LOGS adalah library untuk menulis LOG pada database.
	* Sangat mudah untuk digunakan dengan syarat struktur tabel sesuai/sama dengan ketentuan.
	* 
	* Struktur tabel adalah:
	* * Memiliki 3 atribut yaitu id, kode_log, dan id_admin.
	* * ID didapat dari format waktu pada saat LOG ditulis. Formatnya adalah Ymdhis.
	* * Nama tabel dapat disesuaikan.
	* * Apabila memilki atribut tambahan, bisa ditulis sendiri atau diedit kodenya.
	*/
	class Logs
	{
		private $CI;
		private $id_admin;
		private $tb_name;
		private $max_panjang;

		public function __construct()
		{
			$this->CI =& get_instance();

			$this->tb_name 		= 'tb_log';
			$this->max_panjang  = 3;
		}	

		public function write($kode_log='')
		{
			$this->id_admin = $this->CI->session->userdata('user')['id'];

			if (strlen($kode_log) <= $this->max_panjang && strlen($kode_log) > 0 || ! empty($kode_log)) 
			{
				if (! empty($this->id_admin)) 
				{
					$con['id'] 			= $this->generate_id();
					$con['kode_log']	= $kode_log;
					$con['id_admin']	= $this->id_admin;

					$this->CI->db->insert($this->tb_name, $con);
				}
			}
			else
			{
				die("ERROR: Panjang kode LOG salah atau kode log kosong");
			}
		}

		private function generate_id()
		{
			return date('Ymdhis');
		}
	}

?>