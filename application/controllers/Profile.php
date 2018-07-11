<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller {
			function __construct(){
				parent::__construct();
				$username = $this->session->userdata('username');
				if(empty($username)) redirect("sign");
			}
			public function index($id)
			{
				$this->load->model("profile_model");
				$result = $this->profile_model->read($id);
				$result2 = $this->profile_model->read_notification($id);
				$result_pendidikan = $this->profile_model->read_pendidikan($id);
				$result_pengalaman = $this->profile_model->read_pengalaman($id);

        $data['results'] = $result[0];
				$data['results2'] = $result2;
				$data['results_pengalaman'] = $result_pengalaman;
				$data['results_pendidikan'] = $result_pendidikan;
				$data['success'] = $this->session->flashdata("success");
        $data['error'] = $this->session->flashdata("error");
        $data['result'] = $this->profile_model->read();
				$data['level'] = $this->session->userdata('level');
				$data['view'] = "v_profile.php";
				$this->load->view('index', $data);
			}
		  function do_edit($id){
	      $post = $this->input->post(NULL,TRUE);
	      $this->load->model("profile_model");
	      $this->profile_model->update("id_account='$id'",$post);
	      $this->session->set_flashdata("success","Berhasil Menyunting Profil Anda");
	      redirect("profile/index/".$id);
		  }

			function tambahpendidikan(){
        $data['view'] = "forms/v_form_pendidikan";
        $this->load->view('index', $data);
	    }
	    function do_tambahpendidikan(){
	        $post = $this->input->post(NULL, TRUE);
	        $this->load->model("profile_model");
	        $this->session->set_flashdata("success","Berhasil Menambahkan data pendidikan");
	        $this->profile_model->create_pendidikan($post);

	       redirect("profile/index/".$id);
	    }
	    function editpendidikan($id){
	        $this->load->model("profile_model");
	        $result = $this->profile_model->read_pendidikan("id_pendidikan = '$id'");

	        $data['result'] = $result[0];
	        $data['form_edit'] = TRUE;
	        $data['view'] = "forms/v_form_pendidikan";
	        $this->load->view("index",$data);
	    }
	    function do_editpendidikan($id){
	        $post = $this->input->post(NULL,TRUE);
	        $this->load->model("profile_model");
	        $this->profile_model->update_pendidikan("id_pendidikan='$id'",$post);
	        $this->session->set_flashdata("success","Berhasil Menyunting data pendidikan");
	        redirect("profile");
	    }
	    function deletependidikan($id){
	        $this->load->model("profile_model");
	        $this->profile_model->delete_pendidikan("id_pendidikan='$id'");
	        $this->session->set_flashdata("success","Berhasil Menghapus data pendidikan");
	        redirect("profile/index/".$id);
	    }

			function tambahpengalaman(){
				$this->load->model("profile_model");
				$id_detail_result = $this->profile_model->read_iddetail($this->session->userdata('id_account'));
				$data['id_det'] = $id_detail_result[0];
        $data['view'] = "forms/v_form_pengalaman";
        $this->load->view('index', $data);
	    }
	    function do_tambahpengalaman(){
	        $post = $this->input->post(NULL, TRUE);
	        $this->load->model("profile_model");
	        $this->session->set_flashdata("success","Berhasil Menambahkan data pengalaman");
	        $this->profile_model->create_pengalaman($post);

	        redirect("profile/index/".$id);
	    }
	    function editpengalaman($id){
	        $this->load->model("profile_model");
	        $result = $this->profile_model->read_pengalaman($id);
					$id_detail_result = $this->profile_model->read_iddetail($this->session->userdata('id_account'));
					$data['id_det'] = $id_detail_result[0];

	        $data['result'] = $result[0];
	        $data['form_edit'] = TRUE;
	        $data['view'] = "forms/v_form_pengalaman";
	        $this->load->view("index",$data);
	    }
	    function do_editpengalaman($id){
	        $post = $this->input->post(NULL,TRUE);
	        $this->load->model("profile_model");
	        $this->profile_model->update_pengalaman("id_pengalaman='$id'",$post);
	        $this->session->set_flashdata("success","Berhasil Menyunting data pengalaman");
	        redirect("profile/index/".$id);
	    }
	    function deletepengalaman($id){
	        $this->load->model("profile_model");
	        $this->profile_model->delete_pengalaman("id_pengalaman='$id'");
	        $this->session->set_flashdata("success","Berhasil Menghapus data pengalaman");
	        redirect("profile/index/".$id);
	    }
	}
?>
