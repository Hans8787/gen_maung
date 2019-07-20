<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model
{
	public function getUserByEmail($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();		
	}

	public function resetPassword($password, $email)
	{
		$this->db->set('password', $password);
		$this->db->where('email', $email);
		$this->db->update('user');
	}

	public function getUsers()
	{
		$query = "SELECT `user`.*, `user_role`.`role`
				    FROM `user` JOIN `user_role`
				      ON `user`.`role_id` = `user_role`.`id`
				 ";
		return $this->db->query($query)->result_array();
	}
}