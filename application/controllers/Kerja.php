<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kerja extends CI_Controller {
			public function index()
			{
				$this->load->model("kerja_model");
				$data['view'] = "v_kerja";
				$data['result'] = $this->kerja_model->read();
				$this->load->view('index', $data);
			}
			public function view($id)
			{
				$this->load->model("kerja_model");
				$result = $this->kerja_model->readperusahaan($id);
				$result_pemilik = $this->kerja_model->pemilikperusahaan($this->session->userdata('id_account'));
				$data['result'] = $result[0];
				$data['result_pemilik'] = $result_pemilik;
				$data['view'] = "v_profilperusahaan";
				$this->load->view('index', $data);
			}
	}
?>
