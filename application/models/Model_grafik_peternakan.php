<?php
// Penduduk.php
class model_grafik_peternakan extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from peternakan");
		return $data->result();
    }
    
    public function get_data($search){
        // echo"<pre>";print_r($search['tanggal_awal']);die;
         $sql = "SELECT a.*,b.nama_pasar,c.nama_bahan,count(a.nomor) as pembagi, sum(a.harga) as jml_harga,
        (sum(a.harga)/count(a.nomor)) AS rata_harga,sum(a.stok) as jml_stok 
        FROM peternakan a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN bahan_peternakan c ON a.id_bahan = c.id_bahan
        WHERE a.tanggal BETWEEN ? AND ? AND a.id_pasar= ?
        GROUP BY a.id_bahan
        ";
        //execute query
        $query = $this->db->query($sql,$search);
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
        $result = $query->result_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
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
    public function get_jumlah_harga($search){
        $sql = "SELECT SUM(a.harga) AS jumlah
        FROM peternakan a
        WHERE a.tanggal BETWEEN ? AND ? AND a.id_pasar = ?
        ";
        //execute query
        $query = $this->db->query($sql,$search);
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }
 
}