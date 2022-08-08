<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
		$data['admin'] = $this->model_user->Show();
		// var_dump($data['bahan']);exit();
		$this->load->view("layouts2/header", $data);
		$this->load->view('superadmin/user/profil', $data);
		$this->load->view("layouts2/footer", $data);
    }
}