<?php

class Upload_media extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Upload Foto & Video';

		$this->load->view('templates/back_header', $data);
		$this->load->view('upload/index', $data);
		$this->load->view('templates/back_footer');
	}
}