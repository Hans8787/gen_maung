<?php 

class Akun_model extends CI_model {
	public function getFotoProfil()
	{
		return $this->db->get('akun')->num_rows();
	}

	public function getAllAkun()
	{
		return $this->db->get('akun')->result_array();
	}

	public function getUser($username)
	{
		return $this->db->get_where('akun', ['username' => $username])->row_array();
	}

	// untuk mengedit data berita di database
	public function editBerita()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"slug" => str_replace(' ', '-', $this->input->post('judul', true)),
			"creator" => $this->input->post('creator', true),
			"tanggal" => $this->input->post('tanggal', true),
			"tempat" => $this->input->post('tempat', true),
			"content" => $this->input->post('isiBerita', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kegiatan', $data);
	}
}