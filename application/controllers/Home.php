<?php

class Home extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'OSIS SMK NEGERI 1 JAMBLANG';

		// Info
		$this->load->model('Info_model');
		$data['info'] = $this->Info_model->getInfo();

		// foto
		$data['foto_footer'] = $this->Foto_model->getFotoFooter();

		// Video
		$data['video'] = $this->Video_model->getVideo();

		// Kegiatan
		$data['kegiatan_baru'] = $this->Kegiatan_model->getKegiatanBaru();

		$this->load->view('templates/front_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/front_footer');
	}
}