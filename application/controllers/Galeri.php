<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// cek login
		is_logged_in();

		$this->load->model('Role_model', 'role');
	}

	public function index()
	{
		$data['title'] = 'Upload';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		$data['error'] = null;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('galeri/upload', $data);
		$this->load->view('templates/footer', $data);
	}


	public function uploadfoto()
	{
		$data['title'] = 'Upload';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		$data['error'] = null;

		// form validasi
		$this->form_validation->set_rules('judulfoto', 'Judul Foto', 'required', ['required' => 'Sertakan judul foto.']);

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('galeri/upload', $data);
			$this->load->view('templates/footer');
		} else {
			// upload gambar
			$foto = $_FILES['foto'];

			if ($foto) {
				$config['upload_path'] = './assets/foto/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '10000';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					$foto = $this->upload->data('file_name');

					$this->foto->uploadFoto($foto);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Satu foto berhasil di upload!</div>');
					redirect('galeri');
				} else {
					$data['error'] = $this->upload->display_errors();
          			$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/topbar', $data);
					$this->load->view('galeri/upload', $data);
					$this->load->view('templates/footer');
				}
			}
		}
	}


	public function uploadvideo()
	{
		$data['title'] = 'Upload';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		$data['error'] = null;

		// form validasi
		$this->form_validation->set_rules('judulvideo', 'Judul Video', 'required', ['required' => 'Sertakan judul video.']);

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('galeri/upload', $data);
			$this->load->view('templates/footer');
		} else {
			// upload gambar
			$video = $_FILES['video'];

			if ($video) {
				$config['upload_path'] = './assets/video/';
				$config['allowed_types'] = 'mp4';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('video')) {
					$video = $this->upload->data('file_name');

					$this->video->uploadVideo($video);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Satu video berhasil di upload!</div>');
					redirect('galeri');
				} else {
					$data['error'] = $this->upload->display_errors();
          			$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/topbar', $data);
					$this->load->view('galeri/upload', $data);
					$this->load->view('templates/footer');
				}
			}
		}
	}


	public function foto()
	{
		$data['title'] = 'Foto';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		// PAGINATION
		// load library
		

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/galeri/foto/index';
		$config['total_rows'] = $this->foto->countAllFoto();
		$config['per_page'] = 10;

		// styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);
		$data['foto'] = $this->foto->getFoto($config['per_page'], $data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('galeri/foto', $data);
		$this->load->view('templates/footer');
	}


	public function video()
	{
		$data['title'] = 'Video';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		// PAGINATION
		// load library
		

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/galeri/foto/index';
		$config['total_rows'] = $this->video->countAllVideo();
		$config['per_page'] = 10;

		// styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);
		$data['video'] = $this->video->getVideo($config['per_page'], $data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('galeri/video', $data);
		$this->load->view('templates/footer');
	}
}