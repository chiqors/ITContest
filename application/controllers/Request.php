<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Request extends CI_Controller {
			public function index($id)
			{
				$this->load->model("request_model");
				$result_id_per = $this->request_model->read_pemilik("id_perusahaan = '$id'");
				$data['result_id_per'] = $result_id_per[0];
				$data['result'] = $this->request_model->read();
				$data['view'] = "v_request";
				$this->load->view('index', $data);
			}
			function tambah($id){
					$this->load->model("request_model");
					$result_id_per = $this->request_model->read_pemilik("id_perusahaan = '$id'");

					$data['result_id_per'] = $result_id_per[0];
	        $data['view'] = "forms/v_form_request";
	        $this->load->view('index', $data);
	    }
	    function do_tambah(){
	        $post = $this->input->post(NULL, TRUE);
	        $this->load->model("request_model");
					$result_id_per = $this->input->post('id_perusahaan', TRUE);
					$data['result_id_per'] = $result_id_per;
	        $this->session->set_flashdata("success","Berhasil Menambahkan data request");
	        $this->request_model->create($post);

	        redirect("request/index/".$result_id_per);
	    }
	    function edit($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
	        $result = $this->request_model->read("id_request = '$id'");

					$data['perusahaan_id'] = $perusahaan_id;
	        $data['result'] = $result[0];
	        $data['form_edit'] = TRUE;
	        $data['view'] = "forms/v_form_request";
	        $this->load->view("index",$data);
	    }

	    function do_edit($id){
	        $post = $this->input->post(NULL,TRUE);
	        $this->load->model("request_model");
					$result_id_per = $this->input->post('id_perusahaan', TRUE);
					$data['result_id_per'] = $result_id_per;
	        $this->request_model->update("id_request='$id'",$post);
	        $this->session->set_flashdata("success","Berhasil Menyunting data request");
	        redirect("request/index/".$result_id_per);
	    }
	    function delete($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
	        $this->request_model->delete("id_request='$id'");
	        $this->session->set_flashdata("success","Berhasil Menghapus data request");
	        redirect("request/index/".$perusahaan_id);
	    }
	}
?>
