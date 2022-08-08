<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	const SESSION_SEARCH = 'search';
	public function __construct()
	
	{
		parent::__construct();
		$this->load->helper('tgl_indo_helper');
		$this->load->model("model_laporan_perikanan");
	}

	public function index()
	{
		$data['data'] =$this->db->get('perikanan')->result();
		$this->load->view('admin/perikanan/laporan', $data, FALSA);
	}

	public function detail()
	{
		$search = $this->session->userdata(self::SESSION_SEARCH);
		$data['hasil'] = $this->model_laporan_perikanan->get_data($search);
		if (empty($data['hasil'])) {
			$this->session->set_flashdata('userdata', 'gagal');
			redirect('admin/perikanan/laporan');
		}
		$data['rs_search'] = $search;
		$count_data = count($data['hasil']);
		$jumlah_harga= $this->model_laporan_perikanan->get_jumlah_harga($search);
		$rata_rata = ($jumlah_harga['jumlah']/$count_data);
		// print_r($rata_rata);die;
		$data['rs_jumlah_harga'] = $jumlah_harga;
		$data['rs_rata_rata'] = $rata_rata;
		// echo"<pre>";print_r($data['rs_jumlah_harga']); die;
		$this->load->view("layouts/header");
		$this->load->view('admin/perikanan/laporan_detail', $data);
		$this->load->view("layouts/footer");
		
		// echo "<pre>";print_r($search);die;
	}

	public function cari()
	{
		// echo "<pre>";print_r($this->input->post('search', true));die;
		if ($this->input->post('search', true) == "Tampilkan") {
        $params = array(
			'tanggal_awal' 		=> $this->input->post('tanggal_awal', true),
			'tanggal_akhir' 		=> $this->input->post('tanggal_akhir', true),
			'id_pasar' 		=> $this->input->post('id_pasar', true),
			'id_pedagang'	=> $this->input->post('id_pedagang', true)
        );
        $this->session->set_userdata(self::SESSION_SEARCH, $params);
        } else {
        $this->session->unset_userdata(self::SESSION_SEARCH);
        }
        // echo "<pre>";print_r($this->session->userdata(self::SESSION_SEARCH));die;
        redirect("admin/Laporan/detail");		
	}

	

	public function load_perikanan()
	{
		$nama_pedagang = $_GET['nm_pedagang'];
		$data	= $this->db->get_where('perikanan', ['nm_pedagang' => $nama_pedagang]) ->result();
	}
}