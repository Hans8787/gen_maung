<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_model
{
	public function getRoleById($id)
	{
		return $this->db->get_where('user_role', ['id' => $id])->row_array();
	}

	public function editRole()
	{
		$this->db->set('role', $this->input->post('role'));
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_role');
	}
}