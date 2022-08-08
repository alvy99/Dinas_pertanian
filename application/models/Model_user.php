<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{
	public $_table = "admin";

	public function Show()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDataAdmin()
	{
			$post = $this->input->post();
			$data = array(
			'id_admin' => $post['id_admin'],
			'username' => $post["username"],
			'email' => $post["email"],
			'password' => $post["password"],
			'sektor' => $post["sektor"],
			'level' => $post["level"],
        );

        $this->db->insert('admin', $data);
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
		
		if (!empty($_FILES["image"]["username"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}
		$this->db->where('id_admin', $this->input->post('id'));
		$this->db->update('admin', $data);
	}
	public function save()
	{
		$post = $this->input->post();

		$data = array(
		$this->username = $post['username'],
		$this->email = $post['email'],
		$this->password = $post['password'],
		$this->sektor = $post['sektor'],
		$this->level = $post['level'],
		$this->image = $this->_uploadimage(),
		);
	$this->db->where('id_admin', $this->input->post('id'));
		$this->db->save('admin', $data);
}
	private function _uploadImage()
{
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_admin;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}
private function _deleteImage($id)
{
    $admin = $this->getById($id);
    if ($product->image != "default.jpg") {
	    $admin = explode(".", $admin->image)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
}


}
