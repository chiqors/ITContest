<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lamaran_model extends CI_Model {
  function read($id){
      $this->db->select('username, nama_perusahaan, judul_request, tgl_waktu, status_terima');
      $this->db->from('t_perusahaan, t_detail_perusahaan, t_request, t_form, t_notifikasi, t_account');
      $this->db->where("t_perusahaan.id_perusahaan = t_detail_perusahaan.id_perusahaan");
      $this->db->where("t_perusahaan.id_perusahaan = t_form.id_perusahaan");
      $this->db->where("t_form.id_form = t_notifikasi.id_form");
      $this->db->where("t_form.id_request = t_request.id_request");
      $this->db->where("t_form.id_account = t_account.id_account");
      $this->db->where("t_account.id_account = ". $id);
      $query = $this->db->get();

      if($query and $query->num_rows() != 0){
          return $query->result();
      }else{
          return array();
      }
  }
}
