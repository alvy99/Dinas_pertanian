<?php
class Grafik_peternakan extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_grafik_peternakan');
	}
 
	public function index()
	{
        $grafik = $this->model_grafik_peternakan->get_data();
		$data['graph'] = json_encode($grafik);
		
        // echo"<pre>";print_r($grafik);die;
		$this->load->view('grafik_peternakan', $data);
	}
	public function cari()
	{
		// echo "<pre>";print_r($this->input->post('search', true));die;
		if ($this->input->post('search', true) == "Tampilkan") {
        $params = array(
			'tanggal_awal' 		=> $this->input->post('tanggal_awal', true),
			'tanggal_akhir' 		=> $this->input->post('tanggal_akhir', true),
			'id_pasar' 		=> $this->input->post('id_pasar', true)
        );
        $this->session->set_userdata(self::SESSION_SEARCH, $params);
        } else {
        $this->session->unset_userdata(self::SESSION_SEARCH);
        }
        // echo "<pre>";print_r($this->session->userdata(self::SESSION_SEARCH));die;
        redirect("Laporan_grafik_peternakan/detail");		
	}
}