<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

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

		$this->tbName  = 'tb_admin';
		$this->primary = 'nim';
	}
	

	# ===============================
	# Kumpulan method GETTER 
	# ===============================

	public function get_datasession($nim)
	{

		$this->db->select($this->tbName.'.nim, nama');
		$this->db->from($this->tbName);
		$this->db->join('tb_mahasiswa','tb_mahasiswa.nim = '.$this->tbName.'.'.$this->primary);
		$this->db->where(array($this->tbName.'.'.$this->primary => $nim));
		return $this->db->get()->result_array()[0];
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


	# ===============================
	# Kumpulan method PRIVATE
	# ===============================
    
    # Menginputkan $data kedalam tabel
    private function insert($data)
    {
        return $this->db->insert($this->tbName,$data);
    }
    
    # Mengupdate data dengan id $kode dan data yang diubah berupa $data
    private function update($kode,$data)
    {
        $this->db->where($this->primary,$kode);
        return $this->db->update($this->table,$data);
    }
    
    # Menghapus data dengann id $kode
    private function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }

	# ===============================
	# Kumpulan method SETTER
	# ===============================

	
}
