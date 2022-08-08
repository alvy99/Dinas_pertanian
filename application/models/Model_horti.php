<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_horti extends CI_Model
{
	public $_table = "horti";

	public function getAll(){
        $sql = "SELECT a.*,b.nama_pasar,c.nama_bahan
        FROM horti a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN bahan_horti c ON a.id_bahan = c.id_bahan
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
      public function get_bahan_horti(){
        $sql = "SELECT *
        FROM bahan_horti
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
    /*public function get_sum()
	{
		$this->db->select_sum('harga_eceran', 'jumlah');
		$this->db->from('horti');
		return $this->db->get_where('')->row();
	}
	public function get_avg()
	{
		$this->db->select_avg('harga_eceran', 'rerata');
		$this->db->from('horti');
		return $this->db->get_where('')->row();
	}*/

	public function tambahDataHorti()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(
			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan' => $post["id_bahan"],
			'harga' => $post["harga"],
			'stok'      => $post["stok"],
			'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);
		$this->db->insert('horti', $data);
	}

	function hapus_horti($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('nomor', $id);
		//DELETE FORM mytable
		$this->db->delete("horti");
	}

	public function getHortiByid($id)
	{
		return $this->db->get_where('horti', ['nomor' => $id])->row_array();
	}

	public function updateDataHorti()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(
			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan' => $post["id_bahan"],
			'harga'    => $post["harga"],
			'stok'      => $post["stok"],
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);
		$this->db->where('nomor', $this->input->post('id'));
		$this->db->update('horti', $data);
	}
}
