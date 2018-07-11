<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
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
}
