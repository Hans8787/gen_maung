<?php

class Info_model extends CI_model {
	public function getInfo()
	{
		return $this->db->get('info')->result_array();
	}
}