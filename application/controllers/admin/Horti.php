<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Horti extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("model_horti");
		$this->load->model("model_laporan_horti");
		$this->load->library('form_validation');
		$this->load->helper("form");
		$this->load->helper('tgl_indo_helper');
		if(!$this->session->userdata('username')){
			redirect('auth'); 
		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['horti'] = $this->model_horti->getAll();
		$tanggal = date("Y-m-d h:i:s");
		$data['pasar'] = $this->model_horti->get_nama_pasar();
		$data['bahan_horti'] = $this->model_horti->get_bahan_horti();
		// var_dump($data['bahan']);exit();
		$this->load->view("layouts/header", $data);
		$this->load->view('admin/horti/index', $data);
		$this->load->view("layouts/footer", $data);
	}
	public function tambah_horti()
	{
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');
		
		//var_dump($rataharga);exit;
		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_horti->tambahDataHorti();
			$this->session->set_flashdata('flash','Hortikultura Ditambahkan');
			redirect('admin/Horti');
		}
	} 
	public function edit_horti($id)
	{
		$data['horti'] = $this->model_horti->getHortiByid($id);
		$data['pasar'] = $this->model_horti->get_nama_pasar();
		$data['bahan_horti'] = $this->model_horti->get_bahan_horti();
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/horti/edit', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_horti->updateDataHorti();
			$this->session->set_flashdata('flash','Hortikultura Diubah');
			redirect('admin/Horti');
		}
	}

	function hapus_horti($id)
	{
		$this->model_horti->hapus_horti($id);
		$this->session->set_flashdata('flash',' Hortikultura DiHapus');
		redirect("admin/Horti");
	}
	public function laporan_pdf($tanggal_awal,$tanggal_akhir,$id_pasar)
		{
			$search = array(
				'tanggal_awal'	=> $tanggal_awal,
				'tanggal_akhir'	=> $tanggal_akhir,
				'id_pasar'		=> $id_pasar
			);
	$data['horti'] = $this->model_laporan_horti->get_data($search);
	$data['hasil'] = $this->model_laporan_horti->get_data($search);
	$tanggal = date("Y-m-d h:i:s");
	$data['rs_search'] = $search;

		$this->load->library('Pdf');

		$this->pdf->setPaper('F4', 'potrait');
		$this->pdf->filename = "Hortikultura.pdf";
		$this->pdf->load_view('admin/horti/laporan_pdf', $data);
	}
	// function getpasar(){
	// 	$params = $this->session->userdata('sektor') == 'HTK';
	// 	$request = $this->model_horti->getpasar_model($params);
	// 	// var_dump($request->result_array());exit();
	// 	return $request->result_array();
	// }

	// function getbahan(){
	// 	$params = $this->session->userdata('sektor');
	// 	$request = $this->model_horti->getbahan_model($params);
	// 	// var_dump($request->result_array());exit();
	// 	return $request->result_array();
	// }

	public function laporan()
	{
		$this->load->model('model_horti');
		$data = array(
				'horti'		=> $this->model_horti->getAll(),
				'nama_pasar'	=> $this->model_horti->get_nama_pasar(),
				'bahan_horti'	=> $this->model_horti->get_bahan_horti(),
		);
		// echo "<pre>";print_r($data['nama_pasar']);die;
		$this->load->view("layouts/header");
		$this->load->view('admin/horti/laporan', $data);
		$this->load->view("layouts/footer");

	}
	public function excel($tanggal_awal,$tanggal_akhir,$id_pasar)
	{

		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'id_pasar'		=> $id_pasar,
		);
		$data = $this->model_laporan_horti->get_data($search);
		
		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Admin Hortikultura");
		$object->getProperties()->setLastModifiedBy("Laporan Hortikultura");
		$object->getProperties()->setTitle("Laporan Hortikultura");

		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama Bahan');
		$object->getActiveSheet()->setCellValue('C1', 'Harga Rata-Rata');
		$object->getActiveSheet()->setCellValue('D1', 'Stok');

		$baris = 2;
		$no = 1;

		foreach ($data as $key => $value) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $value['nama_bahan']);
			$object->getActiveSheet()->setCellValue('C'.$baris, $value['harga']);
			$object->getActiveSheet()->setCellValue('D'.$baris, $value['stok']);
			$baris++;
		}

		$filename='Laporan_Hortikultura'.date("d-m-Y").'.xlsx';
		$object->getActiveSheet()->setTitle("Laporan Hortikultura");
		header('Content-disposition: attachment; filename='.$filename);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		// header('Content-Dispotition: attachment;filename="'.$filename. '"');
		// header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		// $writer->save('tes.xlsx');
		$writer->save('php://output');

		exit;

	}
}
