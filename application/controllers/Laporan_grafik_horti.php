<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_grafik_horti extends CI_Controller
{
    const SESSION_SEARCH = 'search';
	public function __construct()
	{
		parent::__construct();
        $this->load->helper("url");
        $this->load->model("model_grafik_horti");
        $this->load->model("model_laporan_grafik_horti");
		$this->load->library('form_validation');
		$this->load->helper("form");
		$this->load->helper('tgl_indo_helper');
		// if($this->form_validation->)
	}

public function index()
	{
		$data = array(
			    'nama_pasar'	=> $this->model_laporan_grafik_horti->get_nama_pasar(),
		);
		// echo "<pre>";print_r($data['nama_pasar']);die;
		$this->load->view('frontend/laporan_grafik_horti', $data);
    }
    public function detail()
	{
		$search = $this->session->userdata(self::SESSION_SEARCH);
		
		// echo"<pre>";print_r($search); die;
		$data = array(
			'nama_pasar'	=> $this->model_laporan_grafik_horti->get_nama_pasar(),
		);
		$data['hasil'] = $this->model_grafik_horti->get_data($search);
		if (empty($data['hasil'])) {
			$this->session->set_flashdata('userdata', 'gagal');
			redirect('laporan_grafik_horti');
		}
		$data['rs_search'] = $search;
		$count_data = count($data['hasil']);
		$jumlah_harga= $this->model_grafik_horti->get_jumlah_harga($search);
        $rata_rata = ($jumlah_harga['jumlah']/$count_data);
        $grafik = $data['hasil'];
        $data['graph'] = json_encode($grafik);
		// print_r($rata_rata);die;
		$data['rs_jumlah_harga'] = $jumlah_harga;
		$data['rs_rata_rata'] = $rata_rata;
		// echo"<pre>";print_r($data['rs_jumlah_harga']); die;
		$this->load->view('grafik_horti', $data);
	
		
		// echo "<pre>";print_r($search);die;
	}
    public function cari()
	{	
		
		// echo "<pre>";print_r($this->input->post('search', true));die;
		if ($this->input->post('search', true) == "Tampilkan") {
        $params = array(
			'tanggal_awal' 	=> $this->input->post('tanggal_awal', true),
			'tanggal_akhir' => $this->input->post('tanggal_akhir', true),
			'id_pasar' 		=> $this->input->post('id_pasar', true)
        );
		$this->session->set_userdata(self::SESSION_SEARCH, $params);
		}
		redirect("Laporan_grafik_horti/detail");
        // echo "<pre>";print_r($this->session->userdata(self::SESSION_SEARCH));die;
}	
	}