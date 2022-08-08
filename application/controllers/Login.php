<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_login");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view('login');
			// $this->load->view('signup');
		} else {
			$this->model_login->register();
			$this->session->set_flashdata('flash', 'Silahkan login');
			redirect('signup');
			// echo "berhasil";
		}
	}
}
