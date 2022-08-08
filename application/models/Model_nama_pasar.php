<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_nama_pasar extends CI_Model
{
	public $_table = "pasar";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	 public function insert($params)
    {
    return $this->db->insert('pasar', $params);
    }
	public function tambahDataPasar()
	{
			$post = $this->input->post();
			$data = array(
			'nama_pasar' => $post["nama_pasar"],      
			  );

        $this->db->insert('pasar', $data);
	}
	public function updateDataPasar()
	{
		$post = $this->input->post();

		$data = array(
		'nama_pasar' => $post["nama_pasar"],  
			
		);
		$this->db->where('id_pasar', $this->input->post('id'));
		$this->db->update('pasar', $data);
	}
	function hapus_pasar($id)
	{
		
		$this->db->where('id_pasar', $id);
		//DELETE FORM mytable
		$this->db->delete("pasar");
	}

	public function getPasarByid($id)
	{
		return $this->db->get_where('pasar', ['id_pasar' => $id])->row_array();
	}
	
}
