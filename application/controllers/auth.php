<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		// redirect('Auth/login');
		$this->load->view('Auth/loginView');
	}

	public function signIn(){
		$this->load->library('form_validation');
		$this->load->model('usersModel');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->usersModel->isValidLogin($email, $password);
		if($result != null){
			$_SESSION['email'] = $result[0]->email;
					redirect('dashboardadmin');
		}
		else{
			echo('<div class="alert alert-danger" role="alert">
			Erro!Este utilizador não existe. Tente outra vez.
		  </div>');
			$this->index();
		}
		// se sim redirect -> home
		// senão 
	}
	


	public function logout()
	{
		$this->load->library('form_validation');
		$this->session->sess_destroy();
		{redirect(base_url());}
		
	}
}
