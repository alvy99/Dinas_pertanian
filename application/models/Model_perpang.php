<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_perpang extends CI_Model
{
	public $_table = "pertanian_pangan";

	public function getAll(){
        $sql = "SELECT a.*,b.nama_pasar,c.nama_bahan
        FROM pertanian_pangan a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN bahan_perpang c ON a.id_bahan = c.id_bahan
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
      public function get_bahan_perpang(){
        $sql = "SELECT *
        FROM bahan_perpang
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
	public function tambahDataPerpang()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(
			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan' => $post["id_bahan"],
			'v_k_m' => $post["v_k_m"],
			'harga' => $post["harga"],
			'stok'  => $post["stok"],
			'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);

		$this->db->insert('pertanian_pangan', $data);
	}

	function hapus_perpang($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('nomor', $id);
		//DELETE FORM mytable
		$this->db->delete("pertanian_pangan");
	}

	public function getPerpangByid($id)
	{
		return $this->db->get_where('pertanian_pangan', ['nomor' => $id])->row_array();
	}


	public function updateDataPerpang()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(
			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan' => $post["id_bahan"],
			'v_k_m' => $post["v_k_m"],
			'harga' => $post["harga"],
			'stok'      => $post["stok"],
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);
		$this->db->where('nomor', $this->input->post('id'));
		$this->db->update('pertanian_pangan', $data);
	}
}
