<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_horti  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_bahan_horti");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['bahan_horti'] = $this->model_bahan_horti->getAll();
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/bahan_horti', $data);
		$this->load->view("layouts2/footer");
    }
    public function tambah_bahan()
	{
		{
		$data['bahan_horti'] = $this->model_bahan_horti->getAll();
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_bahan_horti->tambahDataBahan();
			$this->session->set_flashdata('flash','Bahan Hortikultura Ditambahkan');
			redirect('superadmin/Bahan_horti');
			}
		} 
	}
	public function edit_bahan($id)
	{
		$data['bahan_horti'] = $this->model_bahan_horti->getBahanByid($id);
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts2/header");
			$this->load->view('superadmin/edit_bahan_horti', $data);
			$this->load->view("layouts2/footer");
		} else {
			$this->model_bahan_horti->updateDataBahan();
			$this->session->set_flashdata('flash','Bahan Hortikultura Diubah');
			redirect('superadmin/Bahan_horti');
		}
	}
	function hapus_bahan($id)
	{
		$this->model_bahan_horti->hapus_bahan($id);
		$this->session->set_flashdata('flash','Bahan Hortikultura DiHapus');
			redirect('superadmin/Bahan_horti');
	}
}
