<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// cek login
		is_logged_in();

		// load menu model
		$this->load->model('Menu_model', 'menu');

		// load submenu model
		$this->load->model('Submenu_model', 'submenu');
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
			redirect('menu');
		}

	}

	public function submenu()
	{
		$data['title'] = 'Submenu Management';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		
		$data['subMenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		} else {
			$is_active = $this->input->post('is_active');
			if ($is_active == null) {
				$is_active == 0;

				$data = [
					'title' => $this->input->post('title'),
					'menu_id' => $this->input->post('menu_id'),
					'url' => $this->input->post('url'),
					'icon' => $this->input->post('icon'),
					'is_active' => $is_active
				];

				$this->db->insert('user_sub_menu', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
				redirect('menu/submenu');
			}

		}
	}

	public function hapus($id)
	{
		$this->db->delete('user_menu', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A menu deleted!</div>');
		redirect('menu');
	}

	public function hapusSm($id)
	{
		$this->db->delete('user_sub_menu', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A menu deleted!</div>');
		redirect('menu/submenu');
	}

	public function editMenu()
	{
		$data['title'] = 'Edit Menu Management';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		// ambil data dari get
		$id = $this->input->get('id');

		// ambil data dari post
		$new_menu = $this->input->post('menu');
		// $id = $this->input->post('id');

		$data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/editmenu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->menu->editMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been updated!</div>');
			redirect('menu');
		}

	}

	public function editSubmenu($id)
	{
		$data['title'] = 'Edit Submenu';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$data['sm'] = $this->submenu->getSubmenu($id);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/editsubmenu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->submenu->editSubmenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu has been updated!</div>');
			redirect('menu/submenu');
		}

	}

}