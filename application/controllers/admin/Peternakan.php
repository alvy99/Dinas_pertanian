<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peternakan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_peternakan");
		$this->load->model("model_laporan_peternakan");
		$this->load->library('form_validation');
		$this->load->helper('tgl_indo_helper');
		if(!$this->session->userdata('username')){
			redirect('auth');		}
		// if($this->form_validation->)
	}

	public function index()
	{
		$data['peternakan'] = $this->model_peternakan->getAll();
		$tanggal = date("Y-m-d h:i:s");
		$data['pasar'] = $this->model_peternakan->get_nama_pasar();
		$data['bahan_peternakan'] = $this->model_peternakan->get_bahan_peternakan();
		$this->load->view("layouts/header");
		$this->load->view('admin/peternakan/index', $data);
		$this->load->view("layouts/footer");
	}
	public function tambah_peternakan()
	{
		
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('satuan', 'satuan', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');


		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_peternakan->tambahDataPeternakan();
			$this->session->set_flashdata('flash','Peternakan Ditambahkan');
			redirect('admin/Peternakan');
		}
	} 
	public function edit_peternakan($id)
	{
		$data['peternakan'] = $this->model_peternakan->getPeternakanByid($id);
		$tanggal = date("Y-m-d h:i:s");
		$data['pasar'] = $this->model_peternakan->get_nama_pasar();
		$data['bahan_peternakan'] = $this->model_peternakan->get_bahan_peternakan();
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('id_pasar', 'nama_pasar', 'required');
		$this->form_validation->set_rules('id_bahan', 'nama_bahan', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('satuan', 'satuan', 'required');
		$this->form_validation->set_rules('stok', 'stok', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('admin/peternakan/edit', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_peternakan->updateDataPeternakan();
			$this->session->set_flashdata('flash','Peternakan Diubah');
			redirect('admin/Peternakan');
		}
	}

	function hapus_peternakan($id)
	{
		$this->model_peternakan->hapus_peternakan($id);
		$this->session->set_flashdata('flash','Peternakan DiHapus');
		redirect("admin/Peternakan");
	}
		public function laporan()
	{
		$this->load->model('model_peternakan');
		$data = array(
				'peternakan'	=> $this->model_peternakan->getAll(),
				// 'sum_jumlah'	=> $this->model_peternakan->get_sum(),
				// 'avg_jumlah'	=> $this->model_peternakan->get_avg(),
				'pasar'	=> $this->model_peternakan->get_nama_pasar(),
				'bahan_peternakan'	=> $this->model_peternakan->get_bahan_peternakan(),
		);
		// echo "<pre>";print_r($data['nama_pasar']);die;
		$this->load->view("layouts/header");
		$this->load->view('admin/peternakan/laporan', $data);
		$this->load->view("layouts/footer");

	}
	public function laporan_pdf($tanggal_awal,$tanggal_akhir,$id_pasar)
		{
			$search = array(
				'tanggal_awal'	=> $tanggal_awal,
				'tanggal_akhir'	=> $tanggal_akhir,
				'id_pasar'		=> $id_pasar
			);
		$data['peternakan'] = $this->model_laporan_peternakan->get_data($search);
		$data['hasil'] = $this->model_laporan_peternakan->get_data($search);
		$tanggal = date("Y-m-d h:i:s");
		$data['rs_search'] = $search;
		$this->load->library('pdf');

		$this->pdf->setPaper('F4', 'potrait');
		$this->pdf->filename = "Peternakan.pdf";
		$this->pdf->load_view('admin/peternakan/laporan_pdf', $data);
	}
	public function excel($tanggal_awal,$tanggal_akhir,$id_pasar)
	{

		$search = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'id_pasar'		=> $id_pasar,
		);
		$data = $this->model_laporan_peternakan->get_data($search);
		
		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Admin Peternakan");
		$object->getProperties()->setLastModifiedBy("Laporan Peternakan");
		$object->getProperties()->setTitle("Laporan Peternakan");

		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama Bahan');
		$object->getActiveSheet()->setCellValue('C1', 'Harga Rata-Rata(Rp/Kg');
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

		$filename='Laporan_Peternakan'.date("d-m-Y").'.xlsx';
		$object->getActiveSheet()->setTitle("Laporan Peternakan");
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
