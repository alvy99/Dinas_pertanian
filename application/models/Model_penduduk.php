<?php
// Penduduk.php
class model_penduduk extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function graph()
	{
		$data = $this->db->query("SELECT * from k_moyudan");
		return $data->result();
	}
}
