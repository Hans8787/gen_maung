<?php

class Video extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Galeri Video';

		// foto
		$data['foto_footer'] = $this->Foto_model->getFotoFooter();

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/video/index';
		$config['total_rows'] = $this->Video_model->countAllVideo();
		$config['per_page'] = 6;

		// initialize
		$this->pagination->initialize($config);

		// Kegiatan
		$data['kegiatan_baru'] = $this->Kegiatan_model->getKegiatanBaru();

		$data['start'] = $this->uri->segment(3);
		$data['video'] = $this->Video_model->getVideoPagination($config['per_page'], $data['start']);
		$this->load->view('templates/front_header', $data);
		$this->load->view('video/index', $data);
		$this->load->view('templates/front_footer');
	}

	public function video_admin()
	{
		$data['judul'] = 'Galeri Video';

		// PAGINATION
		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/osissmknjamblang/video/video_admin/index';
		$config['total_rows'] = $this->Video_model->countAllVideo();
		$config['per_page'] = 6;

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

		$data['start'] = $this->uri->segment(4);
		$data['video'] = $this->Video_model->getVideoPagination($config['per_page'], $data['start']);
		$this->load->view('templates/back_header', $data);
		$this->load->view('video/video_admin', $data);
		$this->load->view('templates/back_footer');
	}

	public function hapus($id)
	{
		$old_video = $this->db->get_where('g_video', ['id' => $id])->row_array();
		unlink(FCPATH . 'assets/video/' . $old_video['video']);

		$this->video->hapusVideo($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Satu video berhasil di dihapus!</div>');
		redirect('galeri/video');
	}
}