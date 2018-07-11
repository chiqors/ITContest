<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Lamaran extends CI_Controller {
			public function index()
			{
				$this->load->model("lamaran_model");
        $data['result'] = $this->lamaran_model->read($this->session->userdata('id_account'));
				$data['view'] = "v_lamaran";
				$this->load->view('index', $data);
			}
	}
?>
