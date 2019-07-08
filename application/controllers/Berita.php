<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// cek login
		is_logged_in();
	}

	public function index()
	{
		$data['judul'] = 'Daftar Berita SMKN 1 Jamblang';
		$data['kegiatan_lain'] = $this->Berita_model->getBeritaLain();
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
		$this->db->from('berita');
		$config['base_url'] = 'http://localhost/osissmknjamblang/berita/index';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 2;

		// initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['kegiatan'] = $this->Berita_model->getBerita($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('templates/front_header', $data);
		$this->load->view('berita/index', $data);
		$this->load->view('templates/front_footer');
	}

	public function daftarBerita()
	{
		$data['title'] = 'Daftar Berita';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$data['berita'] = $this->Berita_model->getAllBerita();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('berita/daftar-berita', $data);
		$this->load->view('templates/footer');
	}

	public function inputberita()
	{
		$data['title'] = 'Input Berita';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		$data['error'] = null;

		// form validasi
		$this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Harus diisi']);
		$this->form_validation->set_rules('tempat', 'Tempat', 'required', ['required' => 'Harus diisi']);
		$this->form_validation->set_rules('content', 'Konten', 'required', ['required' => 'Harus diisi']);

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('berita/input-berita', $data);
			$this->load->view('templates/footer');
		} else {
			// upload gambar
			$cover = $_FILES['cover'];

			if ($cover) {
				$config['upload_path'] = './assets/cover/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('cover')) {
					$cover = $this->upload->data('file_name');

					$this->Berita_model->tambahBerita($cover);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A news has been added!</div>');
					redirect('berita/inputberita');
				} else {
					$data['error'] = $this->upload->display_errors();
          			$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/topbar', $data);
					$this->load->view('berita/input-berita', $data);
					$this->load->view('templates/footer');
				}
			}
		}
	}


	public function editBerita($slug)
	{
		$data['title'] = 'Edit Berita';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		$data['berita'] = $this->Berita_model->getBerita($slug);
		$data['error'] = null;

		// form validasi
		$this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Harus diisi']);
		$this->form_validation->set_rules('tempat', 'Tempat', 'required', ['required' => 'Harus diisi']);
		$this->form_validation->set_rules('content', 'Konten', 'required', ['required' => 'Harus diisi']);

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('berita/edit-berita', $data);
			$this->load->view('templates/footer');
		} else {
			$judul = $this->input->post('judul');
			$tempat = $this->input->post('tempat');
			$content = $this->input->post('content');

			// upload gambar
			$cover = $_FILES['cover'];

			if ($cover) {
				$config['upload_path'] = './assets/cover/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']	= '10000';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('cover')) {
					// hapus cover lama
					$old_cover = $data['berita']['cover'];
					unlink(FCPATH . 'assets/cover/' . $old_cover);

					$new_cover = $this->upload->data('file_name');
					$this->db->set('cover', $new_cover);
				} else {
					$data['error'] = $this->upload->display_errors();
          			$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/topbar', $data);
					$this->load->view('berita/edit-berita', $data);
					$this->load->view('templates/footer');
				}
			}

			$this->db->set('judul', $judul);
			$this->db->set('tempat', $tempat);
			$this->db->set('content', $content);

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('berita');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A news has been updated!</div>');
			redirect('berita/daftarBerita');
		}
	}


	public function hapusBerita($id)
	{
		$this->Berita_model->hapusBerita($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A news deleted!</div>');
		redirect('berita/daftarBerita');
	}

	public function baca($slug)
	{
		$data['judul'] = 'Baca Berita';
		$data['berita'] = $this->Berita_model->getBerita($slug);
		$data['kegiatan_lain'] = $this->Berita_model->getBeritaLain();

		$this->load->view('templates/front_header', $data);
		$this->load->view('berita/baca_berita', $data);
		$this->load->view('templates/front_footer');
	}

}
