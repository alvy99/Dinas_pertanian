<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_nama_pedagang extends CI_Model
{
	public $_table = "nama_pedagang";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	 public function insert($params)
    {
    return $this->db->insert('nama_pedagang', $params);
    }
	public function tambahDataPedagang()
	{
			$post = $this->input->post();
			$data = array(
			'nm_pedagang' => $post["nm_pedagang"],      
			  );

        $this->db->insert('nama_pedagang', $data);
	}
	public function updateDataPedagang()
	{
		$post = $this->input->post();

		$data = array(
		'nm_pedagang' => $post["nm_pedagang"],  
			
		);
		$this->db->where('id_pedagang', $this->input->post('id'));
		$this->db->update('nama_pedagang', $data);
	}
	function hapus_pedagang($id)
	{
		
		$this->db->where('id_pedagang', $id);
		//DELETE FORM mytable
		$this->db->delete("nama_pedagang");
	}

	public function getPedagangByid($id)
	{
		return $this->db->get_where('nama_pedagang', ['id_pedagang' => $id])->row_array();
	}
	
}
