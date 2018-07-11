<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerja_model extends CI_Model {
    function read(){
        $this->db->select('t_perusahaan.id_perusahaan, nama_perusahaan, kategori, status, alamat');
        $this->db->from('t_perusahaan');
        $this->db->join('t_detail_perusahaan', 't_detail_perusahaan.id_perusahaan = t_perusahaan.id_perusahaan', 'inner');
        $this->db->join('t_request', 't_perusahaan.id_perusahaan = t_perusahaan.id_perusahaan', 'inner');
        $this->db->where("EXISTS (SELECT NULL FROM t_request WHERE t_request.status = 'buka')");
        $query = $this->db->get();

        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function readperusahaan($id=''){
        $this->db->select('*');
        $this->db->from('t_perusahaan, t_detail_perusahaan');
        $this->db->where('t_perusahaan.id_perusahaan = t_detail_perusahaan.id_perusahaan');
        $this->db->where('t_perusahaan.id_perusahaan = ' . $id);
        $query = $this->db->get();
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
