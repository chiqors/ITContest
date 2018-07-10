<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sign extends CI_Controller {
			public function index() {
				$data['success'] = $this->session->flashdata("success");
        $data['error'] = $this->session->flashdata("error");
        $data['level'] = $this->session->userdata('level');
				$data['view'] = "v_sign.php";
				$this->load->view('index', $data);
			}
			function do_sign() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $where = array(
            "username" => $username,
            "password" => md5($password)
        );
        $this->load->model("sign_model");
        $result = $this->sign_model->read($where);
        if(count($result) != 0) {
						$this->session->set_userdata("id_account",$result[0]->id_account);
            $this->session->set_userdata("username",$username);
						$this->session->set_userdata("email",$result[0]->email);
            $level = $result[0]->level;
            $this->session->set_userdata("level",$level);
            redirect("");
        } else {
            $this->session->set_flashdata("error", "Username atau Password Salah");
            redirect("sign");
        }
    	}
			function signout() {
        $this->session->sess_destroy();
        redirect("");
    	}
	}
?>
