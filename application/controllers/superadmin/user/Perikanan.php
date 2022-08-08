<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perikanan  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_user");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['admin'] = $this->model_user->getAll();
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/user/perikanan/', $data);
		$this->load->view("layouts2/footer");
	}
	private function _do_upload()
    {
        $config['upload_path']          = 'assets/upload/images/foto_profil/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('auth/profile');
        }
        return $this->upload->data('file_name');
    }
}