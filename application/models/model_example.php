<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_example extends CI_Model {

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

		$this->tbName  = 'mahasiswa';
		$this->primary = 'nim';
	}
	

	# ===============================
	# Kumpulan method GETTER 
	# ===============================

	

	# ===============================
	# Kumpulan method PUBLIC
	# ===============================
	


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
