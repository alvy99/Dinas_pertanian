<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemenuser  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_manajemenuser");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['manajemenuser'] = $this->model_manajemenuser->getAll();
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/manajemenuser', $data);
		$this->load->view("layouts2/footer");
    }
    public function tambah_admin()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'md5', 'required');
		$this->form_validation->set_rules('sektor', 'sektor', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		// $this->form_validation->set_rules('$_FILES', 'image');

		$username = $this->input->post('username', true);
		$email =  $this->input->post('email', true);
		$password =  $this->input->post('password', true);
		$sektor =  $this->input->post('sektor', true);
		$level =  $this->input->post('level', true);

		// print_r($username);die;
		if ($image=''){}
		else{
			$config['upload_path']			= './assets/foto/';
			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$config['max_size']             = 1024;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image')){
				echo $this->upload->display_errors(); die();

			}else{
					
				$gbr=$this->upload->data('file_name');
				// print_r($gbr);die;
			}
		}
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$params = array(
				'username' 	=> $username,
				'email'		=> $email,
				'password'	=> md5($password),
				'sektor'	=> $sektor,
				'level'		=> $level,
				'image'		=> $gbr
			);
			// print_r($params);die;
			$this->model_manajemenuser->insert($params);
			$this->session->set_flashdata('flash','Manajemeadmin Ditambahkan');
			redirect('superadmin/Manajemenuser');
		}
	} 
	public function edit_admin($id)
	{
		$data['admin'] = $this->model_manajemenuser->getAdminByid($id);
		// echo"<pre>";print_r($data['admin']);die;
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password','md5','required');
		$this->form_validation->set_rules('sektor', 'sektor', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts2/header");
			$this->load->view('superadmin/edit_manajemenuser', $data);
			$this->load->view("layouts2/footer");
		} else {
			$this->model_manajemenuser->updateDataAdmin();
			$this->session->set_flashdata('flash','Manajemeadmin Diubah');
			redirect('superadmin/Manajemenuser');
		}
	}
	public function updateDataAdmin()
	 {
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'md5', 'required');
		$this->form_validation->set_rules('sektor', 'sektor', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		
		$id_admin =  $this->input->post('id_admin', true);
		if ($this->form_validation->run() ==  FALSE) {
			$this->session->set_flashdata('gagal','Gagal di edit');
				redirect('superadmin/manajemenuser/edit_admin/'.$id_admin);
		}
		$username = $this->input->post('username', true);
		$email =  $this->input->post('email', true);
		$password =  $this->input->post('password', true);
		$sektor =  $this->input->post('sektor', true);
		$level =  $this->input->post('level', true);
		
		$number = mt_rand(100, 999);
		$gbr = $number.$_FILES['image']['name'];

		if(!empty($_FILES["image"]["name"])){
			$this->_uploadImage($gbr);
			$params = array(
				'username' 	=> $username,
				'email'		=> $email,
				'password'	=> $password,
				'sektor'	=> $sektor,
				'level'		=> $level,
				'image'		=> $gbr,
			);
			$where = array(
				'id_admin'	=> $id_admin
			);
			$this->model_manajemenuser->update('admin',$params,$where);
		}else{
			$params = array(
				'username' 	=> $username,
				'email'		=> $email,
				'password'	=> md5($password),
				'sektor'	=> $sektor,
				'level'		=> $level
			);
			$where = array(
				'id_admin'	=> $id_admin
			);
			$this->model_manajemenuser->update('admin',$params,$where);
				
		}
			
			$this->session->set_flashdata('flash','Manajemeadmin Diubah');
			redirect('superadmin/manajemenuser/');
		
	}
	function hapus_admin($id)
	{
		$this->model_manajemenuser->hapus_admin($id);
		$this->session->set_flashdata('flash','Manajemeadmin DiHapus');
		redirect("superadmin/Manajemenuser");
	}

	private function _uploadImage($gbr)
	{
		$config['upload_path']          = './assets/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            = $gbr;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		// echo"<pre>";print_r($config);die;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}else{
			echo $this->upload->display_errors(); die();
		}
		
	}

}
