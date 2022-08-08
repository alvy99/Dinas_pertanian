<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_perpang  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_bahan_perpang");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['bahan_perpang'] = $this->model_bahan_perpang->getAll();
		$this->load->view("layouts/header");
		$this->load->view('admin/perpang/bahan_perpang', $data);
		$this->load->view("layouts/footer");
    }
    public function tambah_bahan()
	{
		{
		$data['bahan_perpang'] = $this->model_bahan_perpang->getAll();
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_bahan_perpang->tambahDataBahan();
			$this->session->set_flashdata('flash','Bahan Pertanian Pangan Ditambahkan');
			redirect('admin/Bahan_perpang');
			}
		} 
	}
	public function edit_bahan($id)
	{
		$data['bahan_perpang'] = $this->model_bahan_perpang->getBahanByid($id);
		$this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/perpang/edit_bahan_perpang', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_bahan_perpang->updateDataBahan();
			$this->session->set_flashdata('flash',' Bahan Pertanian Pangan Diubah');
			redirect('admin/Bahan_perpang');
		}
	}
	function hapus_bahan($id)
	{
		$this->model_bahan_perpang->hapus_bahan($id);
		$this->session->set_flashdata('flash','Bahan Pertanian PanganDiHapus');
			redirect('admin/Bahan_perpang');
	}
}
