<?php

class Kalender extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Admin | Kalender';

		$this->load->view('templates/back_header', $data);
		$this->load->view('admin/kalender/index', $data);
		$this->load->view('templates/back_footer', $data);
	}
}