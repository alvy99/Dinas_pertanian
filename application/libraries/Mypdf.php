<?php
defined('BASEPATH') or exit('No direct script access allowed');

required_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf
{
    protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
    }
    
        public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation='potrait')
	{
        $html =$this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml('$html');
        $dompdf->setPaper('$paper', '$orientation');
    
        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename . "pdf", array("Attachment" => FALSE));
    }
	
}
