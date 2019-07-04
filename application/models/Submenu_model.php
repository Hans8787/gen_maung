<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu_model extends CI_model
{

	// ambil data berita/kegiatan by slug
	public function getSubmenu($id)
	{
		return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
	}

	public function editSubmenu()
	{
		$data = [
			"menu_id" => $this->input->post('menu_id', true),
			"title" => $this->input->post('title', true),
			"url" => $this->input->post('url', true),
			"icon" => $this->input->post('icon', true),
			"is_active" => $this->input->post('is_active', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_sub_menu', $data);
	}

}