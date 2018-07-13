<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {
    function create($data)
    {
    	$this->db->insert('t_request', $data);
    }
    function read_pemilik($where="", $order=""){
        if(!empty($where)) $this->db->where($where);
        if(!empty($order)) $this->db->where($order);

        $query = $this->db->get("t_perusahaan");
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function pemilikperusahaan($id=''){
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
    function read($where="", $order=""){
        if(!empty($where)) $this->db->where($where);
        if(!empty($order)) $this->db->where($order);

        $query = $this->db->get("t_request");
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function update($where, $data){
        $this->db->where($where);
        $this->db->update("t_request",$data);
    }
    function delete($where){
        $this->db->where($where);
        $this->db->delete("t_request");
    }
}
