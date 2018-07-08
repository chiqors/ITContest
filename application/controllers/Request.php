<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Request extends CI_Controller {
			public function index()
			{
				$data['view'] = "forms/v_form_request";
				$this->load->view('index', $data);
			}
	}
?>
