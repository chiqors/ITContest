<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Lamaran extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_lamaran";
				$this->load->view('index', $data);
			}
	}
?>
