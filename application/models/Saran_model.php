<?php

class Saran_model extends CI_model {
	public function getAllKotakSaran()
	{
		return $this->db->get('ideabox')->result_array();
	}

	// Untuk Pagination di laman Kotak Saran
	public function getSaran($limit, $start)
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('ideabox', $limit, $start)->result_array();
	}

	// menghitung jumlah data pada tabel ideabox
	public function countAllSaran()
	{
		return $this->db->get('ideabox')->num_rows();
	}

	// mengambil saran By Id
	public function getSaranById($id)
	{
		return $this->db->get_where('ideabox', ['id' => $id])->row_array();
	}

	// untuk hapus saran
	public function hapusSaran($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('ideabox');
	}
}