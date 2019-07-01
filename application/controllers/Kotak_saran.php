<?php

class Kotak_saran extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Saran_model');
	}

	public function index()
	{
		$data['judul'] = 'Admin | Kotak Saran';

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/kotak_saran/index';
		$config['total_rows'] = $this->Saran_model->countAllSaran();
		$config['per_page'] = 15;

		// styling
		$config['full_tag_open'] = '<div class="blog-pagination"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['kotak_saran'] = $this->Saran_model->getSaran($config['per_page'], $data['start']);

		$this->load->view('templates/back_header', $data);
		$this->load->view('kotak_saran/index', $data);
		$this->load->view('templates/back_footer');
	}

	public function baca($id)
	{
		$data['baca'] = $this->Saran_model->getSaranById($id);
		$data['judul'] = 'Admin | Baca Saran';

		$this->load->view('templates/back_header', $data);
		$this->load->view('kotak_saran/baca_saran', $data);
		$this->load->view('templates/back_footer');
	}

	public function hapus($id)
	{
		$this->Saran_model->hapusSaran($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Kotak_saran/index');
	}
}