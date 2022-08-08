<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Horti  extends CI_Controller
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
		$this->load->view("layouts/header");
		$this->load->view('user/horti/index', $data);
		$this->load->view("layouts/footer");
	}
}