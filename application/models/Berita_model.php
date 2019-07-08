<?php

class Berita_model extends CI_model {

	// untuk berita lain, di laman berita
	public function getBeritaLain()
	{
		$this->db->order_by('id', 'RANDOM');
		return $this->db->get('berita', 4)->result_array();
	}

	// untuk berita terbaru
	public function getBeritaBaru()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('berita', 3)->result_array();
	}

	// untuk membuat pagination
	public function getBerita($slug)
	{
		return $this->db->get_where('berita', ['slug' => $slug])->row_array();
	}

	// untuk menghitung jumlah data yang ada di tabel Berita
	public function countAllBerita()
	{
		return $this->db->get('berita')->num_rows();
	}

	public function getAllBerita()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('berita')->result_array();
	}

	// untuk memasukkan data berita ke database
	public function tambahBerita($cover)
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"slug" => strtolower(str_replace(' ', '-', $this->input->post('judul', true))),
			"creator" => $this->input->post('creator', true),
			"tanggal" => $this->input->post('tanggal', true),
			"tempat" => $this->input->post('tempat', true),
			"content" => $this->input->post('content', true),
			"cover" => $cover
		];

		$this->db->insert('berita', $data);
	}

	// untuk hapus data berita
	public function hapusBerita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('berita');
	}

	// untuk mengedit data berita di database
	public function editBerita($data)
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('berita', $data);
	}

}
