<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_perpang");
		$this->load->model("model_laporan_perpang");
		$this->load->library('form_validation');
		$this->load->helper('tgl_indo_helper');
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		// if($this->form_validation->)
	}
 
	public function index()
	{
		$data['pertanian_pangan'] = $this->model_perpang->getAll();
		$tanggal = date("Y-m-d h:i:s");
		$data['pasar'] = $this->model_perpang->get_nama_pasar();
		$data['bahan_perpang'] = $this->model_perpang->get_bahan_perpang();
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/perpang/index', $data);
		$this->load->view("layouts2/footer");
	}
	public function tambah_perpang()
	{
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('v_k_m', 'v_k_m', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');


		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_perpang->tambahDataPerpang();
			$this->session->set_flashdata('flash', 'Pertanian Pangan Ditambahkan');
			redirect('superadmin/Perpang');
		}
	}
		public function edit_perpang($id)
	{
		$data['pertanian_pangan'] = $this->model_perpang->getPerpangByid($id);
		$tanggal = date("Y-m-d h:i:s");
		$data['pasar'] = $this->model_perpang->get_nama_pasar();
		$data['bahan_perpang'] = $this->model_perpang->get_bahan_perpang();
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('v_k_m', 'v_k_m', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts2/header");
			$this->load->view('superadmin/perpang/edit', $data);
			$this->load->view("layouts2/footer");
		} else {
			$this->model_perpang->updateDataPerpang();
			$this->session->set_flashdata('flash', 'Pertanian Pangan Diubah');
			redirect('superadmin/Perpang');
		}
	}
	function hapus_perpang($id)
	{
		$this->model_perpang->hapus_perpang($id);
		$this->session->set_flashdata('flash', 'Pertanian Pangan DiHapus');
		redirect("superadmin/Perpang");
	}
	public function laporan_pdf($tanggal_awal,$tanggal_akhir,$id_pasar)
	{
		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'id_pasar'		=> $id_pasar
		);
		// echo"<pre>";print_r($search);die;
		$data['perpang'] = $this->model_laporan_perpang->get_data($search);
		$data['hasil'] = $this->model_laporan_perpang->get_data($search);
		$tanggal = date("Y-m-d h:i:s");
		$data['rs_search'] = $search;
		// $data['perpang'] = $this->model_perpang->getAll();
		// $data['hasil'] = $this->model_laporan_perpang->get_data($search);

		$this->load->library('pdf');

		$this->pdf->setPaper('F4', 'potrait');
		$this->pdf->filename = "pertanian_pangan.pdf";
		$this->pdf->load_view('superadmin/perpang/laporan_pdf', $data);
	}
	public function laporan()
	{
		$this->load->model('model_perpang');
		$data = array(
				'perpang'	=> $this->model_perpang->getAll(),
				'nama_pasar'	=> $this->model_perpang->get_nama_pasar(),
				'bahan_perpang'	=> $this->model_perpang->get_bahan_perpang(),
		);
		// echo "<pre>";print_r($data['nama_pasar']);die;
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/perpang/laporan', $data);
		$this->load->view("layouts2/footer");

	}
	public function excel($tanggal_awal,$tanggal_akhir,$id_pasar)
	{

		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'id_pasar'		=> $id_pasar
		);
		$data = $this->model_laporan_perpang->get_data($search);
		
		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Admin Pertanian Pangan");
		$object->getProperties()->setLastModifiedBy("Laporan Pertanian Pangan");
		$object->getProperties()->setTitle("Laporan Pertanian Pangan");

		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama Bahan');
		$object->getActiveSheet()->setCellValue('C1', 'Harga');
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

		$filename='Laporan_Pertanian_Pangan'.date("d-m-Y").'.xlsx';
		$object->getActiveSheet()->setTitle("Laporan Pertanian Pangan");
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
