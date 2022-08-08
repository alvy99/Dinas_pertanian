<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_peternakan  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_bahan_peternakan");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['bahan_peternakan'] = $this->model_bahan_peternakan->getAll();
		$this->load->view("layouts/header");
		$this->load->view('admin/peternakan/bahan_peternakan', $data);
		$this->load->view("layouts/footer");
    }
    public function tambah_bahan()
	{
		{
		$data['bahan_peternakan'] = $this->model_bahan_peternakan->getAll();
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_bahan_peternakan->tambahDataBahan();
			$this->session->set_flashdata('flash','Bahan Peternakan Ditambahkan');
			redirect('admin/Bahan_peternakan');
			}
		} 
	}
	public function edit_bahan($id)
	{
		$data['bahan_peternakan'] = $this->model_bahan_peternakan->getBahanByid($id);
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/peternakan/edit_bahan_peternakan', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_bahan_peternakan->updateDataBahan();
			$this->session->set_flashdata('flash','Bahan Peternakan Diubah');
			redirect('admin/Bahan_peternakan');
		}
	}
	function hapus_bahan($id)
	{
		$this->model_bahan_peternakan->hapus_bahan($id);
		$this->session->set_flashdata('flash','Bahan Peternakan DiHapus');
			redirect('admin/Bahan_peternakan');
	}
}
