<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_perikanan extends CI_Model
{
	public $_table = "perikanan";

	public function getAll(){
        $sql = "SELECT a.*,b.nama_pasar,c.nm_pedagang,d.jenis_ikan
        FROM perikanan a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN nama_pedagang c ON a.id_pedagang = c.id_pedagang
        LEFT JOIN jenis_ikan d ON a.id_jenis = d.id_jenis
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
     public function get_jenis_ikan(){
        $sql = "SELECT *
        FROM jenis_ikan
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
	public function tambahDataPerikanan()
	{
			$post = $this->input->post();
			$tanggal = date("Y-m-d h:i:s");
			$data = array(
			'tanggal' => $post["tanggal"],
			'id_pasar' => $post["id_pasar"],
			'id_pedagang' => $post["id_pedagang"],
            'id_jenis' => $post["id_jenis"],
            'harga'        => $post["harga"],
            'jumlah'      => $post["jumlah"],
            'asal_ikan' => $post["asal_ikan"],
            'keterangan' => $post["keterangan"],
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
        );

        $this->db->insert('perikanan', $data);
    }

	function hapus_perikanan($id)
	{
		
		$this->db->where('nomor', $id);
		//DELETE FORM mytable
		$this->db->delete("perikanan");
	}

	public function getPerikananByid($id)
	{
		return $this->db->get_where('perikanan', ['nomor' => $id])->row_array();
	}
	public function updateDataPerikanan()
	{
        $post = $this->input->post();
        $tanggal = date("Y-m-d h:i:s");
		$data = array(
           	'tanggal' => $post["tanggal"],
			'id_pasar' => $post["id_pasar"],
			'id_pedagang' => $post["id_pedagang"],
            'id_jenis' => $post["id_jenis"],
            'harga' => $post["harga"],
            'jumlah' => $post["jumlah"],
            'asal_ikan' => $post["asal_ikan"], 
            'keterangan' => $post["keterangan"], 
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
        );
		$this->db->where('nomor', $this->input->post('id'));
		$this->db->update('perikanan', $data);
	}
}
