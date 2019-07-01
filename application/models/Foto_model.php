<?php 

class Foto_model extends CI_model {
	public function getFotoFooter()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('g_foto', 6)->result_array();
	}

	// Untuk Pagination di laman Galeri Foto
	public function getFoto($limit, $start)
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('g_foto', $limit, $start)->result_array();
	}

	// menghitung jumlah data pada tabel g_foto
	public function countAllFoto()
	{
		return $this->db->get('g_foto')->num_rows();
	}

	public function hapusFoto($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('g_foto');
	}
}