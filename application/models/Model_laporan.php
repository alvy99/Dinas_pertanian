<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_laporan extends CI_Model
{
	public $_table = "horti";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
    }
}