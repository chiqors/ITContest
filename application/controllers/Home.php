<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
			public function index()
			{
				$this->load->model("home_model");
        $data['result'] = $this->home_model->read();
				$data['view'] = "v_home";
				$this->load->view('index', $data);
			}
	}
?>
