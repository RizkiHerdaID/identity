<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

	# ===============================
	# Kumpulan ATRIBUT
	# ===============================

	private $tbName;
	private $primary;

	# ===============================
	# Konstruktor
	# ===============================

	public function __construct()
	{
		parent::__construct();

		$this->tbName  = 'tb_mahasiswa';
		$this->primary = 'nim';
	}
	

	# ===============================
	# Kumpulan method GETTER 
	# ===============================

	public function get_datasession($nim)
	{

		$this->db->select('nim, nama');
		return $this->db->get_where($this->tbName, array($this->primary => $nim))->result_array()[0];
	}


	public function get_password($nim)
	{

		$this->db->select('password');
		return $this->db->get_where($this->tbName, array($this->primary => $nim))->result_array()[0];
	}
	# ===============================
	# Kumpulan method PUBLIC
	# ===============================
	public function cek_login($data)
	{
		$result = $this->db->get_where('tb_mahasiswa', array('nim' => $data['nim'], 'status' => 1));

		if($result->num_rows() > 0)
		{

			$result = $result->result_array()[0];
			return password_verify($data['password'],$result['password']);
		}

		return FALSE;
	}


	public function registrasi($data)
	{

		$nim = $data['nim'];
		unset($data['nim']);
		$data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);
		return $this->update($nim,$data);
	}

	public function verifikasi($data)
	{
		$result = $this->db->get_where('tb_mahasiswa', array($this->primary=>$data['nim'], 'status'=>'0'));

		if ($result->num_rows() > 0) 
		{
			$result = $result->result_array()[0];
			
			if (password_verify($result['password'], $data['password'])) 
			{
				if ($this->update($nim, array('status'=>'1'))) 
				{
					return TRUE;
				}

				return FALSE;
			}

			return FALSE;
		}

		return FALSE;
	}

	# ===============================
	# Kumpulan method PRIVATE
	# ===============================
    
    # Menginputkan $data kedalam tabel
    private function insert($data)
    {
        return $this->db->insert($this->tbName,$data);
    }
    
    # Mengupdate data dengan id $kode dan data yang diubah berupa $data
    private function update($kode, $data)
    {

        $this->db->where($this->primary, $kode);
        return $this->db->update($this->tbName,$data);
    }
    
    # Menghapus data dengann id $kode
    private function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->tbName);
    }

	# ===============================
	# Kumpulan method SETTER
	# ===============================

	
}
