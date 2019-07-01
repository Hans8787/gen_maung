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

	public function foto_admin()
	{
		$data['judul'] = 'Admin | Galeri Foto';

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/foto/foto_admin/index';
		$config['total_rows'] = $this->Foto_model->countAllFoto();
		$config['per_page'] = 10;

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
		$data['foto'] = $this->Foto_model->getFoto($config['per_page'], $data['start']);
		$this->load->view('templates/back_header', $data);
		$this->load->view('foto/foto_admin', $data);
		$this->load->view('templates/back_footer');
	}

	public function hapus($id)
	{
		$this->Foto_model->hapusFoto($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('foto/foto_admin');
	}
}