<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nama_pasar  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_nama_pasar");
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['pasar'] = $this->model_nama_pasar->getAll();
		$this->load->view("layouts/header");
		$this->load->view('admin/nama_pasar', $data);
		$this->load->view("layouts/footer");
    }
    public function tambah_pasar()
	{
		{
		$data['pasar'] = $this->model_nama_pasar->getAll();
		$this->form_validation->set_rules('nama_pasar', 'nama_pasar', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_nama_pasar->tambahDataPasar();
			$this->session->set_flashdata('flash','Nama Pasar Ditambahkan');
			redirect('admin/Nama_pasar');
			}
		} 
	}
	public function edit_pasar($id)
	{
		$data['pasar'] = $this->model_nama_pasar->getPasarByid($id);
		$this->form_validation->set_rules('nama_pasar', 'nama_pasar', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/edit_nama_pasar', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_nama_pasar->updateDataPasar();
			$this->session->set_flashdata('flash',' Nama Pasar Diubah');
			redirect('admin/Nama_pasar');
		}
	}
	
	function hapus_pasar($id)
	{
		$this->model_nama_pasar->hapus_pasar($id);
		$this->session->set_flashdata('flash','Nama Pasar DiHapus');
			redirect('admin/Nama_pasar');
	}
}
