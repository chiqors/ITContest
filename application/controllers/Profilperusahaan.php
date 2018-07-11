<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profilperusahaan extends CI_Controller {
			public function index()
			{
        $this->load->model("Profilperusahaan_model");
        $result = $this->Profilperusahaan_model->read($this->session->userdata('id_account'));

        $data['result'] = $result[0];
        if (empty($result)) {
          redirect("perusahaan");
        } else {
          $data['view'] = "v_profilperusahaan";
          $this->load->view('index', $data);
        }
			}
	    function edit($id){
        $this->load->model("profilperusahaan_model");
        $result = $this->profilperusahaan_model->read($this->session->userdata('id_account'));

        $data['result'] = $result[0];
        $data['form_edit'] = TRUE;
        $data['view'] = "forms/v_form_detail_profilperusahaan";
        $this->load->view("index",$data);
	    }

	    function do_edit($id){
        $post = $this->input->post(NULL,TRUE);
        $this->load->model("profilperusahaan_model");
        $this->profilperusahaan_model->update("id_perusahaan='$id'",$post);
        $this->session->set_flashdata("success","Berhasil Menyunting data perusahaan");
        redirect("profilperusahaan");
	    }
	    function delete($id){
        $this->load->model("profilperusahaan_model");
        $this->profilperusahaan_model->delete("id_perusahaan='$id'");
        $this->session->set_flashdata("success","Berhasil Menghapus data perusahaan");
        redirect("kerja");
	    }
	}
?>
