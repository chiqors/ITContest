<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Request extends CI_Controller {
			public function index($id)
			{
				$this->load->model("request_model");
				$result_id_per = $this->request_model->read_pemilik("id_perusahaan = '$id'");
				$result_pemilik = $this->request_model->pemilikperusahaan($this->session->userdata('id_account'));
				$data['result_pemilik'] = $result_pemilik;
				$data['result_id_per'] = $result_id_per[0];
				$data['result'] = $this->request_model->read();
				$data['success'] = $this->session->flashdata("success");
        $data['error'] = $this->session->flashdata("error");
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
			function view($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
	        $result = $this->request_model->read("id_request = '$id'");

					$data['view'] = "forms/v_form_request";
	        $this->load->view("index",$data);
	    }
			function isiform($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
	        $result = $this->request_model->read("id_request = '$id'");

					$data['id_pers'] = $perusahaan_id;
					$data['result'] = $result[0];
					$data['view'] = "forms/v_form_formulir";
	        $this->load->view("index",$data);
	    }
			function do_form(){
	        $post = $this->input->post(NULL, TRUE);
	        $this->load->model("request_model");
					$result_id_per = $this->input->post('id_perusahaan', TRUE);
					$data['result_id_per'] = $result_id_per;
	        $this->session->set_flashdata("success","Berhasil Menambahkan data form");
	        $this->request_model->createform($post);

	        redirect("request/index/".$result_id_per);
	    }
			function visitform($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
					$result_request = $this->request_model->read("id_request = '$id'");
					$result = $this->request_model->readviewlist($id);

					$data['id_pers'] = $perusahaan_id;
					$data['result_request'] = $result_request[0];
					$data['result'] = $result;
					$data['view'] = "v_list_form";
	        $this->load->view("index",$data);
	    }
			function visitformperson($id){
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->get('id_per');
					$request_id = $this->input->get('id_req');
	        $result = $this->request_model->readrequest($id);
					$result_form = $this->request_model->readform($id);

					$data['id_pers'] = $perusahaan_id;
					$data['result'] = $result[0];
					$data['result_form'] = $result_form[0];
					$data['view'] = "v_formulir";
	        $this->load->view("index",$data);
	    }
			function do_status($id){
	        $post = $this->input->post(NULL, TRUE);
	        $this->load->model("request_model");
					$perusahaan_id = $this->input->post('id_perusahaan');
					$request_id = $this->input->post('id_request');
	        $this->session->set_flashdata("success","Berhasil Menambahkan data form");
	        $this->request_model->update_status("id_form='$id'",$post);
					if($this->input->post('status_terima') == "tunggu") {
						redirect("request/visitform/".$request_id);
					} else {
						redirect("request/do_sendmessage/".$id."?id_req=".$request_id."?id_per=".$perusahaan_id);
					}
	    }
			function do_sendmessage($id){
				$this->load->model("request_model");
				$result_form = $this->request_model->readform($id);
				$perusahaan_id = $this->input->get('id_per');
				$request_id = $this->input->get('id_req');
				$result_id_account_form = $this->request_model->read_id_acc_form($id);
				$data['result_form'] = $result_form[0];
				$data['result_id_account_form'] = $result_id_account_form[0];
				$data['id_formulir'] = $id;
				$data['id_peru'] = $perusahaan_id;
				$data['id_requ'] = $request_id;
				$data['view'] = "v_pesan.php";
				$this->load->view("index",$data);
			}
			function do_sendmsg($id){
				$post = $this->input->post(NULL, TRUE);
				$this->load->model("request_model");

				$request_id = $this->input->get('id_req');

				$data['id_requ'] = $request_id;
				$data['result_request'] = $result_request[0];

				$this->session->set_flashdata("success","Berhasil Mengirimkan pesan");
				$this->request_model->create_message($post);
				redirect("request/visitform/".$id_requ);
			}
	}
?>
