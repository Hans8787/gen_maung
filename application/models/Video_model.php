<?php 

class Video_model extends CI_model {
	public function getVideo()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('g_video', 6)->result_array();
	}

	// Untuk Pagination di laman Galeri video
	public function getVideoPagination($limit, $start)
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('g_video', $limit, $start)->result_array();
	}

	// menghitung jumlah data pada tabel g_video
	public function countAllVideo()
	{
		return $this->db->get('g_video')->num_rows();
	}

	// untuk hapus video
	public function hapusVideo($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('g_video');
	}
}