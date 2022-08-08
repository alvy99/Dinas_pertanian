<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_laporan_perikanan extends CI_Model
{
	
	public function get_data($search){
        // echo"<pre>";print_r($search['tanggal_awal']);die;
        $sql = "SELECT a.*,b.nama_pasar,c.nm_pedagang,d.jenis_ikan,count(a.nomor) as pembagi, sum(a.harga) as jml_harga,
                (sum(a.harga)/count(a.nomor)) AS rata_harga,sum(a.jumlah) as jml_harga
        FROM perikanan a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN nama_pedagang c ON a.id_pedagang = c.id_pedagang
        LEFT JOIN jenis_ikan d ON a.id_jenis = d.id_jenis
       
        WHERE a.tanggal BETWEEN ? AND ? AND a.id_pasar = ? AND a.id_pedagang = ?
        GROUP BY a.id_jenis
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

    public function get_jumlah_harga($search){
        $sql = "SELECT SUM(a.harga) AS jumlah
        FROM perikanan a
        WHERE a.tanggal BETWEEN ? AND ? AND a.id_pasar = ? AND a.id_pedagang = ?
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

   public function get_nama_pedagang(){
        $sql = "SELECT *
        FROM nama_pedagang
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
