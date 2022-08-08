<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_perikanan  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_bahan_perikanan");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['jenis_ikan'] = $this->model_bahan_perikanan->getAll();
		$this->load->view("layouts/header");
		$this->load->view('admin/perikanan/bahan_perikanan', $data);
		$this->load->view("layouts/footer");
    }
    public function tambah_bahan()
	{
		{
		$data['jenis_ikan'] = $this->model_bahan_perikanan->getAll();
		$this->form_validation->set_rules('jenis_ikan', 'jenis_ikan', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_bahan_perikanan->tambahDataBahan();
			$this->session->set_flashdata('flash','Jenis Ikan Ditambahkan');
			redirect('admin/Bahan_perikanan');
			}
		} 
	}
	public function edit_bahan($id)
	{
		$data['jenis_ikan'] = $this->model_bahan_perikanan->getBahanByid($id);
		$this->form_validation->set_rules('jenis_ikan', 'jenis_ikan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/perikanan/edit_bahan_perikanan', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_bahan_perikanan->updateDataBahan();
			$this->session->set_flashdata('flash','Jenis Ikan Diubah');
			redirect('admin/Bahan_perikanan');
		}
	}
	function hapus_bahan($id)
	{
		$this->model_bahan_perikanan->hapus_bahan($id);
		$this->session->set_flashdata('flash','Jenis Ikan DiHapus');
			redirect('admin/Bahan_perikanan');
	}
}
