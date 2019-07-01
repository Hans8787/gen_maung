<?php 

class Kegiatan_model extends CI_model {

	// untuk berita lain, di laman berita
	public function getKegiatanLain()
	{
		$this->db->order_by('id', 'RANDOM');
		return $this->db->get('kegiatan', 4)->result_array();
	}

	// untuk berita terbaru
	public function getKegiatanBaru()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('kegiatan', 3)->result_array();
	}

	// untuk membuat pagination
	public function getKegiatan($limit, $start, $keyword = null)
	{
		if( $keyword ) {
			$this->db->like('judul', $keyword);
			$this->db->or_like('content', $keyword);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get('kegiatan', $limit, $start)->result_array();
	}

	// untuk menghitung jumlah data yang ada di tabel kegiatan
	public function countAllKegiatan()
	{
		return $this->db->get('kegiatan')->num_rows();
	}

	public function getAllKegiatan()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('kegiatan')->result_array();
	}

	// untuk memasukkan data berita ke database
	public function tambahBerita()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"slug" => str_replace(' ', '-', $this->input->post('judul', true)),
			"creator" => $this->input->post('creator', true),
			"tanggal" => $this->input->post('tanggal', true),
			"tempat" => $this->input->post('tempat', true),
			"content" => $this->input->post('isiBerita', true)
		];

		$this->db->insert('kegiatan', $data);
	}

	// untuk hapus data berita
	public function hapusBerita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kegiatan');
	}

	// ambil data berita/kegiatan by slug
	public function getBerita($slug)
	{
		return $this->db->get_where('kegiatan', ['slug' => $slug])->row_array();
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