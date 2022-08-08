<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perikanan  extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("model_perikanan");
		$this->load->model("model_laporan_perikanan");
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
		$data['perikanan'] = $this->model_perikanan->getAll();
		$data['pedagang'] = $this->model_perikanan->get_nama_pedagang();
		$data['pasar'] = $this->model_perikanan->get_nama_pasar();
		$data['jenis_ikan'] = $this->model_perikanan->get_jenis_ikan();
		$tanggal = date("Y-m-d h:i:s");
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/perikanan/index', $data);
		$this->load->view("layouts2/footer");
	}
	public function tambah_perikanan()
	{
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_pedagang', 'nama_pedagang', 'required');
		$this->form_validation->set_rules('id_jenis', 'jenis_ikan', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('asal_ikan', 'asal_ikan', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');


		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_perikanan->tambahDataPerikanan();
			$this->session->set_flashdata('flash','Perikanan Ditambahkan');
			redirect('superadmin/Perikanan');
		}
	} 
		public function edit_perikanan($id)
	{
		$data['perikanan'] = $this->model_perikanan->getPerikananByid($id);
		$data['pedagang'] = $this->model_perikanan->get_nama_pedagang();
		$data['pasar'] = $this->model_perikanan->get_nama_pasar();
		$data['jenis_ikan'] = $this->model_perikanan->get_jenis_ikan();
		$tanggal = date("Y-m-d h:i:s");
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'id_pasar', 'required');
		$this->form_validation->set_rules('id_pedagang', 'id_pedagang', 'required');
		$this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('asal_ikan', 'asal_ikan', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts2/header");
			$this->load->view('superadmin/perikanan/edit', $data);
			$this->load->view("layouts2/footer");
		} else {
			$this->model_perikanan->updateDataPerikanan();
			$this->session->set_flashdata('flash','Perikanan Diubah');
			redirect('superadmin/Perikanan');
		}
	}
		function hapus_perikanan($id)
	{
		$this->model_perikanan->hapus_perikanan($id);
		$this->session->set_flashdata('flash','Perikanan DiHapus');
		redirect("superadmin/Perikanan");
	}

	public function laporan_pdf($tanggal_awal,$tanggal_akhir,$id_pasar,$id_pedagang)
	{
		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,	
			'id_pasar'		=> $id_pasar,
			'id_pedagang'	=> $id_pedagang
		);
	$data['perikanan'] = $this->model_laporan_perikanan->get_data($search);
	$data['hasil'] = $this->model_laporan_perikanan->get_data($search);
	$tanggal = date("Y-m-d h:i:s");
	$data['rs_search'] = $search;
	$this->load->library('pdf');

	$this->pdf->setPaper('F4', 'potrait');
	$this->pdf->filename = "perikanan.pdf";
	$this->pdf->load_view("superadmin/perikanan/laporan_pdf", $data);
	}  
    public function laporan()
	{
		$this->load->model('model_perikanan');
		$data = array(
				'perikanan'		=> $this->model_perikanan->getAll(),
				'nama_pasar'	=> $this->model_perikanan->get_nama_pasar(),
				'jenis_ikan'	=> $this->model_perikanan->get_jenis_ikan(),
				'nama_pedagang'	=> $this->model_perikanan->get_nama_pedagang(),
		);
		// echo "<pre>";print_r($data['nama_pasar']);die;
		$this->load->view("layouts2/header");
		$this->load->view('superadmin/perikanan/laporan', $data);
		$this->load->view("layouts2/footer");

	}  
	public function excel($tanggal_awal,$tanggal_akhir,$id_pasar,$id_pedagang)
	{

		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'id_pasar'		=> $id_pasar,
			'id_pedagang'	=> $id_pedagang
		);
		$data = $this->model_laporan_perikanan->get_data($search);
		
		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Admin Perikanan");
		$object->getProperties()->setLastModifiedBy("Laporan Perikanan");
		$object->getProperties()->setTitle("Laporan Perikanan");

		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Jenis Ikan');
		$object->getActiveSheet()->setCellValue('C1', 'Rata-Rata Harga Satuan(Rp/Kg');
		$object->getActiveSheet()->setCellValue('D1', 'Jumlah Perminggu(Kg)');

		$baris = 2;
		$no = 1;

		foreach ($data as $key => $value) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $value['jenis_ikan']);
			$object->getActiveSheet()->setCellValue('C'.$baris, $value['harga']);
			$object->getActiveSheet()->setCellValue('D'.$baris, $value['jumlah']);
			$baris++;
		}

		$filename='Laporan_Perikanan'.date("d-m-Y").'.xlsx';
		$object->getActiveSheet()->setTitle("Laporan Perikanan");
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