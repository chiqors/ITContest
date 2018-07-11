<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kerja extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_kerja";
				$this->load->view('index', $data);
			}
			function tambah(){
        $data['view'] = "kelas/v_form";
        $this->load->view('index', $data);
	    }
	    function do_tambah(){
        $post = $this->input->post(NULL, TRUE);
        $this->load->model("kelas_model");
        $this->session->set_flashdata("success","Berhasil Menambahkan data kelas");
        $this->kelas_model->create($post);

        redirect("kelas");
	    }
	    function edit($id){
        $this->load->model("kelas_model");
        $result = $this->kelas_model->read("id_kelas = '$id'");

        $data['result'] = $result[0];
        $data['form_edit'] = TRUE;
        $data['view'] = "kelas/v_form";
        $this->load->view("index",$data);
	    }

	    function do_edit($id){
        $post = $this->input->post(NULL,TRUE);
        $this->load->model("kelas_model");
        $this->kelas_model->update("id_kelas='$id'",$post);
        $this->session->set_flashdata("success","Berhasil Menyunting data kelas");
        redirect("kelas");
	    }
	    function delete($id){
        $this->load->model("kelas_model");
        $this->kelas_model->delete("id_kelas='$id'");
        $this->session->set_flashdata("success","Berhasil Menghapus data kelas");
        redirect("kelas");
	    }
	}
?>
