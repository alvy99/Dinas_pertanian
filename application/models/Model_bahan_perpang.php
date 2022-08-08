<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_bahan_perpang extends CI_Model
{
	public $_table = "bahan_perpang";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	 public function insert($params)
    {
    return $this->db->insert('bahan_perpang', $params);
    }
	public function tambahDataBahan()
	{
			$post = $this->input->post();
			$data = array(
			'nama_bahan' => $post["nama_bahan"],      
			  );

        $this->db->insert('bahan_perpang', $data);
	}
	public function updateDataBahan()
	{
		$post = $this->input->post();

		$data = array(
		'nama_bahan' => $post["nama_bahan"],  
			
		);
		$this->db->where('id_bahan', $this->input->post('id'));
		$this->db->update('bahan_perpang', $data);
	}
	function hapus_bahan($id)
	{
		
		$this->db->where('id_bahan', $id);
		//DELETE FORM mytable
		$this->db->delete("bahan_perpang");
	}

	public function getBahanByid($id)
	{
		return $this->db->get_where('bahan_perpang', ['id_bahan' => $id])->row_array();
	}
	
}
