<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_peternakan extends CI_Model
{
	public $_table = "peternakan";

	public function getAll()
	{
		  $sql = "SELECT a.*,b.nama_pasar,c.nama_bahan
        FROM peternakan a
        LEFT JOIN pasar b ON a.id_pasar = b.id_pasar
        LEFT JOIN bahan_peternakan c ON a.id_bahan = c.id_bahan
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
      public function get_bahan_peternakan(){
        $sql = "SELECT *
        FROM bahan_peternakan
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

	public function tambahDataPeternakan()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(
			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan'  => $post["id_bahan"],
			'harga' => $post["harga"],
			'satuan'      => $post["satuan"],
			'stok'      => $post["stok"],
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);

		$this->db->insert('peternakan', $data);
	}

	function hapus_peternakan($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('nomor', $id);
		//DELETE FORM mytable
		$this->db->delete("peternakan");
	}

	public function getPeternakanByid($id)
	{
		return $this->db->get_where('peternakan', ['nomor' => $id])->row_array();
	}


	public function updateDataPeternakan()
	{
		$post = $this->input->post();
		$tanggal = date("Y-m-d h:i:s");
		$data = array(

			'tanggal' => $post['tanggal'],
			'id_pasar' => $post["id_pasar"],
			'id_bahan'        => $post["id_bahan"],
			'harga'      => $post["harga"],
			'satuan'      => $post["satuan"],
			'stok'      => $post["stok"],
            'mdb'	=> $this->session->userdata('username'),
            'mdd'	=> $tanggal, 
		);
		$this->db->where('nomor', $this->input->post('id'));
		$this->db->update('peternakan', $data);
	}
}

