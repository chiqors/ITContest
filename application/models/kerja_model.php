<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerja_model extends CI_Model {
    function read($where="", $order=""){
        if(!empty($where)) $this->db->where($where);
        if(!empty($order)) $this->db->where($order);

        $query = $this->db->get("t_perusahaan");
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function create($data){
  		$this->db->insert('t_perusahaan', $data);
  	}
    function update($where, $data){
        $this->db->where($where);
        $this->db->update("t_perusahaan",$data);
    }
    function delete($where){
        $this->db->where($where);
        $this->db->delete("t_perusahaan");
    }
}
