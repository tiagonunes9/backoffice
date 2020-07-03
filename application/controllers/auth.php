<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index()
	{
		// redirect('Auth/login');
		$this->load->view('auth/loginView');
	}

	public function signIn(){
		$this->load->library('form_validation');
		$this->load->model('usersModel');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->usersModel->isValidLogin($email, $password);
		if($result != null){
			$dados = $this->usersModel->getDados($email);
			$this->session->set_userdata('NOME', $dados['nome']);
			$this->session->set_userdata('IMG_AVATAR', $dados['imagem']);
			if($result[0]->tipo_user=="1"){
			$_SESSION['admin']= 1;
			redirect('dashboardadmin');
			}
			else if($result[0]->tipo_user=="2"){
			$_SESSION['admin']= 2;
			redirect('dashboardmanager');
			}
			else if($result[0]->tipo_user=="3"){
				$_SESSION['admin']= 3;
				redirect('dashboarduser');
				}
			
			$_SESSION['admin'] = $result[0]->email;
		}
		else{
		  $this->load->view('auth/loginView1');
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
