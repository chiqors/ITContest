<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller {
			public function index()
			{
				$data['view'] = "v_profile.php";
				$this->load->view('index', $data);
			}
      public function edit($id)
			{
				$data['view'] = "forms/v_form_profile.php";
				$this->load->view('index', $data);
			}
	}
?>
