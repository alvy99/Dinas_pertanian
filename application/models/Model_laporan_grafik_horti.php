<?php
class model_laporan_grafik_horti extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from horti");
		return $data->result();
	}
	
	public function get_nama_pasar(){
        $sql = "SELECT *
        FROM pasar
        ";
        //execute query
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        $result = $query->result_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
	}
	
}