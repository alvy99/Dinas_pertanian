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
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/nama_pedagang', $data);
		$this->load->view("layouts2/footer");
    }
    public function tambah_pedagang()
	{
		{
		$data['nama_pedagang'] = $this->model_nama_pedagang->getAll();
		$this->form_validation->set_rules('nm_pedagang', 'nama_pedagang', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_nama_pedagang->tambahDataPedagang();
			$this->session->set_flashdata('flash',' Nama Pedagang Ditambahkan');
			redirect('superadmin/Nama_pedagang');
			}
		} 
	}
	public function edit_pedagang($id)
	{
		$data['nama_pedagang'] = $this->model_nama_pedagang->getPedagangByid($id);
		$this->form_validation->set_rules('nm_pedagang', 'nama_pedagang', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts2/header");
			$this->load->view('superadmin/edit_nama_pedagang', $data);
			$this->load->view("layouts2/footer");
		} else {
			$this->model_nama_pedagang->updateDataPedagang();
			$this->session->set_flashdata('flash','Nama Pedagang Diubah');
			redirect('superadmin/Nama_pedagang');
		}
	}
	
	function hapus_pedagang($id)
	{
		$this->model_nama_pedagang->hapus_pedagang($id);
		$this->session->set_flashdata('flash','Nama Pedagang DiHapus');
			redirect('superadmin/Nama_pedagang');
	}
}
