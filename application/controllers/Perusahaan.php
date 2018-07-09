<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Perusahaan extends CI_Controller {
			public function index()
			{
				$data['view'] = "forms/v_form_perusahaan";
				$this->load->view('index', $data);
			}
	}
?>
