<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		// if($this->form_validation->)
	}
	public function index()
	{
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/overview');
		$this->load->view("layouts2/footer");
	}
}
