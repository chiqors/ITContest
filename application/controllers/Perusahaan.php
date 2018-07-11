<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Perusahaan extends CI_Controller {
			public function index()
			{
				$data['view'] = "forms/v_form_perusahaan";
				$this->load->view('index', $data);
			}
			public function register($id)
			{
				$post = $this->input->post(NULL, TRUE);
				$this->load->model("perusahaan_model");
				$this->perusahaan_model->create($post);
				$result_id_perusahaan = $this->perusahaan_model->read_pemilik($id);
				redirect("perusahaan/regist/".$id);
			}
			public function regist($id)
			{
				$post = $this->input->post(NULL, TRUE);
				$this->load->model("perusahaan_model");
				$result_id_perusahaan = $this->perusahaan_model->read_pemilik($id);

				$data['result_id_per'] = $result_id_perusahaan[0];
				$data['view'] = "forms/v_form_detail_perusahaan";
				$this->load->view('index', $data);
			}
			function do_regist(){
				 $post = $this->input->post(NULL, TRUE);
				 $this->load->model("perusahaan_model");
				 $this->perusahaan_model->create_detail($post);
				 redirect("");
		 }
	}
?>
