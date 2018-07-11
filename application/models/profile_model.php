<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile_model extends CI_Model {
    function read($id=''){
        $this->db->select('*');
        $this->db->from('t_account, t_detail_account');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_account.id_account = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function read_pendidikan($id=''){
        $this->db->select('t_pendidikan.id_pendidikan, nama_jenjang, nama_lulusan');
        $this->db->from('t_account, t_detail_account, t_pendidikan');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_pendidikan.id_detail_account = t_detail_account.id_detail_account');
        $this->db->where('t_account.id_account = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function read_pengalaman($id=''){
        $this->db->select('t_pengalaman.id_pengalaman, nama_pekerjaan, jangka_waktu, tempat_kerja');
        $this->db->from('t_account, t_detail_account, t_pengalaman');
        $this->db->where('t_account.id_account = t_detail_account.id_account');
        $this->db->where('t_pengalaman.id_detail_account = t_detail_account.id_detail_account');
        $this->db->where('t_account.id_account = ' . $id);
        $query = $this->db->get();
        if($query and $query->num_rows() != 0){
            return $query->result();
        }else{
            return array();
        }
    }
    function read_notification($id='') {
      $this->db->select('judul_request, status_terima, pesan, tgl_waktu');
      $this->db->from('t_account, t_notifikasi, t_form, t_request');
      $this->db->where('t_notifikasi.id_form = t_form.id_form');
      $this->db->where('t_request.id_request = t_form.id_request');
      $this->db->where('t_notifikasi.id_account = t_account.id_account');
      $this->db->where('t_account.id_account = ' . $id);
      $query = $this->db->get();
      if($query and $query->num_rows() != 0){
          return $query->result();
      }else{
          return array();
      }
    }

    function update($where, $data){
        $this->db->where($where);
        $this->db->update("t_detail_account",$data);
    }

    function create_pendidikan($data){
  		$this->db->insert('t_pendidikan', $data);
  	}
    function update_pendidikan($where, $data){
        $this->db->where($where);
        $this->db->update("t_pendidikan",$data);
    }
    function delete_pendidikan($where){
        $this->db->where($where);
        $this->db->delete("t_pendidikan");
    }

    function create_pengalaman($data){
  		$this->db->insert('t_pengalaman', $data);
  	}
    function update_pengalaman($where, $data){
        $this->db->where($where);
        $this->db->update("t_pengalaman",$data);
    }
    function delete_pengalaman($where){
        $this->db->where($where);
        $this->db->delete("t_pengalaman");
    }

    function read_iddetail($id){
      $this->db->select('t_detail_account.id_detail_account');
      $this->db->from('t_account, t_detail_account');
      $this->db->where('t_account.id_account = t_detail_account.id_account');
      $this->db->where('t_account.id_account = ' . $id);
      $query = $this->db->get();
      if($query and $query->num_rows() != 0){
          return $query->result();
      }else{
          return array();
      }
    }
}
