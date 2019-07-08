<?php

class Foto extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Galeri Foto';

		// foto
		$data['foto_footer'] = $this->Foto_model->getFotoFooter();

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/foto/index';
		$config['total_rows'] = $this->Foto_model->countAllFoto();
		$config['per_page'] = 3;

		// initialize
		$this->pagination->initialize($config);

		// Kegiatan
		$data['kegiatan_baru'] = $this->Kegiatan_model->getKegiatanBaru();

		$data['start'] = $this->uri->segment(3);
		$data['foto'] = $this->Foto_model->getFoto($config['per_page'], $data['start']);
		$this->load->view('templates/front_header', $data);
		$this->load->view('foto/index', $data);
		$this->load->view('templates/front_footer');
	}

	public function hapus($id)
	{
		$old_foto = $this->db->get_where('g_foto', ['id' => $id])->row_array();
		unlink(FCPATH . 'assets/foto/' . $old_foto['foto']);

		$this->foto->hapusFoto($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Satu foto berhasil di dihapus!</div>');
		redirect('galeri/foto');
	}
}