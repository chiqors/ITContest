<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_register";
				$this->load->view('index', $data);
			}
	}
?>
