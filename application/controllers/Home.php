<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_home.php";
				$this->load->view('index', $data);
			}
	}
?>
