<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estatistica extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('Estatistica/indexView', $data);
	}
	public function alunos()
	{

		$this->load->view('Estatistica/alestatistica');
	}	

}
