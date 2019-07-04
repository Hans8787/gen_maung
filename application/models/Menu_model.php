<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				    FROM `user_sub_menu` JOIN `user_menu`
				      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
				 ";
		return $this->db->query($query)->result_array();
	}

	public function editMenu()
	{
		$data = [
			"menu" => $this->input->post('menu', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_menu', $data);
	}

}