<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class perfil extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['email'])) || $_SESSION['email']==null){redirect(base_url());}
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('perfil/indexView', $data);
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_user = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->get($id_user);

		$data['utilizadores'] = $utilizadores;

		$this->load->view('perfil/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		$tipo_user = $this->input->post('tipo_user');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$morada = $this->input->post('morada');
		$contacto = $this->input->post('contacto');
		$data = array(
			'tipo_user' => $tipo_user,
			'email' => $email,
			'password' => $password,
			'contacto' => $contacto,
		);
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->put($id, $data);
		
		redirect('perfil');
	}
}
