<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$data['title'] = 'Dashboard';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function role()
	{
		$data['title'] = 'Role';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role', 'Role Name', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->db->insert('user_role', ['role' => $this->input->post('role')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added!</div>');
			redirect('admin/role');
		}
	}

	public function hapusRole($id)
	{
		$this->db->delete('user_role', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">A role deleted!</div>');
		redirect('admin/role');
	}

	public function editRole($id)
	{
		$data['title'] = 'Edit User Role';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		// ambil data dari by id
		$data['role'] = $this->role->getRoleById($id);

		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/editrole', $data);
			$this->load->view('templates/footer');
		} else {
			$this->role->editRole();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role has been updated!</div>');
			redirect('admin/role');
		}

	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);
		// ambil data di role berdasarkan id yang dikirmkan
		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
		// ambil semua data menu
		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer', $data);
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'menu_id' => $menu_id,
			'role_id' =>$role_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
	}


	public function listusers()
	{
		$data['title'] = 'List Users';
		$email = $this->session->userdata('email');
		$data['user'] = $this->user->getUserByEmail($email);

		$data['users'] = $this->user->getUsers();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/listusers', $data);
		$this->load->view('templates/footer', $data);
	}

}