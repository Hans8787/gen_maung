<?php

class Daftar_pengguna extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Akun_model');
	}

	public function index()
	{
		$data['judul'] = 'Admin | Daftar Pengguna';

		$data['daftar_pengguna'] = $this->Akun_model->getAllAkun();

		$this->load->view('templates/back_header', $data);
		$this->load->view('daftar_pengguna/index', $data);
		$this->load->view('templates/back_footer');
	}

	public function edit($username)
	{
		$data['judul'] = 'Admin | Edit User';
		$data['akun'] = $this->Akun_model->getUser($username);
		$data['role'] = [1, 2];

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/back_header', $data);
			$this->load->view('daftar_pengguna/edit_akun', $data);
			$this->load->view('templates/back_footer');
		} else {
			$this->Akun_model->editAkun();
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('daftar_pengguna/edit_akun');
		}
	}
}