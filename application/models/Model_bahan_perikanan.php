<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_bahan_perikanan extends CI_Model
{
	public $_table = "jenis_ikan";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	 public function insert($params)
    {
    return $this->db->insert('jenis_ikan', $params);
    }
	public function tambahDataBahan()
	{
			$post = $this->input->post();
			$data = array(
			'jenis_ikan' => $post["jenis_ikan"],      
			  );

        $this->db->insert('jenis_ikan', $data);
	}
	public function updateDataBahan()
	{
		$post = $this->input->post();

		$data = array(
		'jenis_ikan' => $post["jenis_ikan"],  
			
		);
		$this->db->where('id_jenis', $this->input->post('id'));
		$this->db->update('jenis_ikan', $data);
	}
	function hapus_bahan($id)
	{
		
		$this->db->where('id_jenis', $id);
		//DELETE FORM mytable
		$this->db->delete("jenis_ikan");
	}

	public function getBahanByid($id)
	{
		return $this->db->get_where('jenis_ikan', ['jenis_ikan' => $id])->row_array();
	}
	
}
