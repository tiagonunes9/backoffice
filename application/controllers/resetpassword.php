<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resetpassword extends CI_Controller {

	public function index()
	{
		// redirect('Auth/login');
		$this->load->view('resetpassword/loginView');
	}
}
