<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kerja extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_kerja";
				$this->load->view('index', $data);
			}
	}
?>
