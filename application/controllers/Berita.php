<?php

class Berita extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Daftar Berita SMKN 1 Jamblang';
		$data['kegiatan_lain'] = $this->Kegiatan_model->getKegiatanLain();
		$data['foto_footer'] = $this->Foto_model->getFotoFooter();

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// ambil data keyword
		if($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		// config
		$this->db->like('judul', $data['keyword']);
		$this->db->or_like('content', $data['keyword']);
		$this->db->from('kegiatan');
		$config['base_url'] = 'http://localhost/osissmknjamblang/berita/index';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 2;

		// initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['kegiatan'] = $this->Kegiatan_model->getKegiatan($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('templates/front_header', $data);
		$this->load->view('berita/index', $data);
		$this->load->view('templates/front_footer');
	}

	public function daftar_berita()
	{
		$data['judul'] = 'Admin | Daftar Berita';

		$data['berita'] = $this->Kegiatan_model->getAllKegiatan();

			$this->load->view('templates/back_header', $data);
			$this->load->view('berita/daftar_berita', $data);
			$this->load->view('templates/back_footer');
	}

	public function input_berita()
	{
		$data['judul'] = 'Admin | Input Berita';

		// form validasi
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('tanggal', 'Waktu', 'required');
		$this->form_validation->set_rules('isiBerita', 'Konten', 'required');
		
		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/back_header', $data);
			$this->load->view('berita/tambah', $data);
			$this->load->view('templates/back_footer');
		} else {
			$this->Kegiatan_model->tambahBerita();
			$this->session->set_flashdata('flash', 'Dipublikasikan');
			redirect('berita/input_berita');
		}
	}

	public function hapus($id)
	{
		$this->Kegiatan_model->hapusBerita($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('berita/daftar_berita');
	}

	public function baca($slug)
	{
		$data['judul'] = 'Baca Berita';
		$data['berita'] = $this->Kegiatan_model->getBerita($slug);
		$data['kegiatan_lain'] = $this->Kegiatan_model->getKegiatanLain();

		$this->load->view('templates/front_header', $data);
		$this->load->view('berita/baca_berita', $data);
		$this->load->view('templates/front_footer');
	}

	public function edit($slug)
	{
		$data['judul'] = 'Admin | Edit Berita';
		$data['berita'] = $this->Kegiatan_model->getBerita($slug);

		// form validasi
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('tanggal', 'Waktu', 'required');
		$this->form_validation->set_rules('isiBerita', 'Konten', 'required');
		
		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/back_header', $data);
			$this->load->view('berita/edit', $data);
			$this->load->view('templates/back_footer');
		} else {
			$this->Kegiatan_model->editBerita();
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('berita/input_berita');
		}
	}

}