<?php 

class Info extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Info Sekolah';

		// Info
		$this->load->model('Info_model');
		$data['info'] = $this->Info_model->getInfo();

		// foto
		$data['foto_footer'] = $this->Foto_model->getFotoFooter();

		// Kegiatan
		$data['kegiatan_baru'] = $this->Kegiatan_model->getKegiatanBaru();

		$this->load->view('templates/front_header', $data);
		$this->load->view('info/index', $data);
		$this->load->view('templates/front_footer');
	}

	public function info_admin()
	{
		$data['judul'] = 'Admin | Info Sekolah';

		// Info
		$this->load->model('Info_model');
		$data['info'] = $this->Info_model->getInfo();

		$this->load->view('templates/back_header', $data);
		$this->load->view('info/info_admin', $data);
		$this->load->view('templates/back_footer');
	}

	public function edit_info()
	{
		$data['judul'] = 'Admin | Edit Info';

		// Info
		$this->load->model('Info_model');
		$data['info'] = $this->Info_model->getInfo();

		$this->load->view('templates/back_header', $data);
		$this->load->view('info/edit_info', $data);
		$this->load->view('templates/back_footer');
	}
}