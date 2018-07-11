<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_model extends CI_Model {
    function read_pemilik($id=''){
        $this->db->select('id_perusahaan');
        $this->db->from('t_perusahaan');
        $this->db->where('t_perusahaan.id_account = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function create($data){
  		$this->db->insert('t_perusahaan', $data);
  	}
    function create_detail($data){
  		$this->db->insert('t_detail_perusahaan', $data);
  	}
}
