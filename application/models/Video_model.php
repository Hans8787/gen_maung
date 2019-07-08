<?php 

class Video_model extends CI_model {

	// Untuk Pagination di laman Galeri video
	public function getVideo($limit, $start)
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

	// upload video
	public function uploadVideo($video)
	{
		$data = [
			"creator" => $this->input->post('creator'),
			"judul"	  => $this->input->post('judulvideo'),
			"video"	  => $video,
			"created" => $this->input->post('created')
		];

		$this->db->insert('g_video', $data);
	}
}