<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sign extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_sign";
				$this->load->view('index', $data);
			}
	}
?>
