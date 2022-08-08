<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nama_pedagang  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_nama_pedagang");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['nama_pedagang'] = $this->model_nama_pedagang->getAll();
		$this->load->view("layouts/header");
		$this->load->view('admin/perikanan/nama_pedagang', $data);
		$this->load->view("layouts/footer");
    }
    public function tambah_pedagang()
	{
		{
		$data['nama_pedagang'] = $this->model_nama_pedagang->getAll();
		$this->form_validation->set_rules('nm_pedagang', 'nm_pedagang', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_nama_pedagang->tambahDataPedagang();
			$this->session->set_flashdata('flash',' Nama Pedagang Ditambahkan');
			redirect('admin/Nama_pedagang');
			}
		} 
	}
	public function edit_pedagang($id)
	{
		$data['nama_pedagang'] = $this->model_nama_pedagang->getPedagangByid($id);
		$this->form_validation->set_rules('nm_pedagang', 'nm_pedagang', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/perikanan/edit_nama_pedagang', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_nama_pedagang->updateDataPedagang();
			$this->session->set_flashdata('flash','Nama Pedagang Diubah');
			redirect('admin/Nama_pedagang');
		}
	}
	
	function hapus_pedagang($id)
	{
		$this->model_nama_pedagang->hapus_pedagang($id);
		$this->session->set_flashdata('flash','Nama Pedagang DiHapus');
			redirect('admin/Nama_pedagang');
	}
}
