<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class perfil extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['email'])) || $_SESSION['email']==null){redirect(base_url());}
		$this->load->model('perfilModel');

		$utilizadores = $this->perfilModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('perfil/indexView', $data);
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_user = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('perfilModel');

		$utilizadores = $this->perfilModel->get($id_user);

		$data['utilizadores'] = $utilizadores;

		$this->load->view('perfil/indexView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$morada = $this->input->post('morada');
		$contato = $this->input->post('contato');
		$imagem = $this->input->post('imagem');
		$nome = $this->input->post('nome');
		$data = array(
			'email' => $email,
			'password' => $password,
			'morada' => $morada,
			'contato' => $contato,
			'imagem' => $imagem,
			'nome' => $nome,
			
		);
		$this->load->model('perfilModel');

		$utilizadores = $this->perfilModel->put($id, $data);
		
		redirect('perfil');
	}
	
}
