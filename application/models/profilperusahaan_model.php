<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilperusahaan_model extends CI_Model {
    function read($id=''){
        $this->db->select('*');
        $this->db->from('t_perusahaan, t_detail_perusahaan');
        $this->db->where('t_perusahaan.id_perusahaan = t_detail_perusahaan.id_perusahaan');
        $this->db->where('t_perusahaan.id_account = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function update($where, $data){
        $this->db->where($where);
        $this->db->update("t_detail_perusahaan",$data);
    }
    function delete($where){
        $this->db->where($where);
        $this->db->delete("t_detail_perusahaan");
        $this->db->where($where);
        $this->db->delete("t_perusahaan");
    }
}
