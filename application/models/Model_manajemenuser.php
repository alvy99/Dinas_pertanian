<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class model_manajemenuser extends CI_Model
{
	public $_table = "admin";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}
	 public function insert($params)
    {
    return $this->db->insert('admin', $params);
    }
	public function tambahDataAdmin()
	{
			$post = $this->input->post();
			$data = array(
			'username' => $post["username"],
			'email' => $post["email"],
			'password' => $post["password"],
			'sektor' => $post["sektor"],
			'level' => $post["level"],
			'image'	=> $post["image"],
        );

        $this->db->insert('admin', $data);
	}
	public function update($table,$params,$where)
    {
        $this->db->set($params);
        $this->db->where($where);
        return $this->db->update($table);
    }
	public function updateDataAdmin()
	{
		$post = $this->input->post();
		$data = array(
	
			'username' => $post["username"],
			'email' => $post["email"],
			'password' => $post["password"],
			'sektor' => $post["sektor"],
			'level' => $post["level"],
			'image' => $post["image"],
		);
		$this->db->where('id_admin', $this->input->post('id'));
		$this->db->update('admin', $data);
	}
	function hapus_admin($id)
	{
		
		$this->db->where('id_admin', $id);
		//DELETE FORM mytable
		$this->db->delete("admin");
	}
	public function getAdminByid($id)
	{
		return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
	}
}
