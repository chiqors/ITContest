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
    function createform($data)
    {
    	$this->db->insert('t_form', $data);
    }
    function readrequest($id=''){
        $this->db->select('*');
        $this->db->from('t_request, t_form');
        $this->db->where('t_form.id_request = t_request.id_request');
        $this->db->where('t_form.id_form = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function readviewlist($id=''){
        $this->db->select('*');
        $this->db->from('t_account, t_detail_account, t_form, t_request');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_form.id_account = t_account.id_account');
        $this->db->where('t_form.id_request = t_request.id_request');
        $this->db->where('t_form.id_request = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function readform($id=''){
        $this->db->select('t_form.id_account, t_account.username, t_detail_account.nama_lengkap, t_form.isi_form, t_form.isi_form, t_form.id_form, t_form.status_terima');
        $this->db->from('t_account, t_detail_account, t_form, t_request');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_form.id_account = t_account.id_account');
        $this->db->where('t_form.id_request = t_request.id_request');
        $this->db->where('t_form.id_form = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function read_id_acc_form($id=''){
        $this->db->select('t_form.id_account');
        $this->db->from('t_account, t_detail_account, t_form, t_request');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_form.id_account = t_account.id_account');
        $this->db->where('t_form.id_request = t_request.id_request');
        $this->db->where('t_form.id_form = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function update_status($where, $data){
        $this->db->where($where);
        $this->db->update("t_form",$data);
    }
    function create_message($data)
    {
    	$this->db->insert('t_notifikasi', $data);
    }
}
