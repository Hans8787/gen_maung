<?php

function is_logged_in()
{
	$CI =& get_instance();
	if (!$CI->session->userdata('email')) {
		redirect('auth');
	} else {
		// ambil role_id user yang login
		$role_id = $CI->session->userdata('role_id');
		// ambil controller yang diakses, dari url
		$menu = $CI->uri->segment(1);
		// ambil menu dari tabel user_menu
		$queryMenu = $CI->db->get_where('user_menu', ['menu' => $menu])->row_array();
		// ambil id menu
		$menu_id = $queryMenu['id'];
		// query menu yang boleh diakses oleh user
		$userAccess = $CI->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		// cek ada tidak user access nya
		if ($userAccess->num_rows() < 1) {
			redirect('auth/blocked');
		}
	}
}

function check_access($role_id, $menu_id)
{
	$CI =& get_instance();

	$result = $CI->db->get_where('user_access_menu', [
						 		 'role_id' => $role_id,
								 'menu_id' => $menu_id
								]);

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	} 
}