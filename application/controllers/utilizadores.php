<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utilizadores extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['email'])) || $_SESSION['email']==null){redirect(base_url());}
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/indexView', $data);
	}

	public function novoutilizador()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$dados['tipo_user'] = $this->input->post("tipo_user");
			$dados['email'] = $this->input->post("email");
			$dados['password'] = $this->input ->post("password");

			$this->load->model('utilizadoresModel');

			$valid = $this->utilizadoresModel->post($dados);

			redirect("utilizadores");

		}
		$this->load->helper(array('form', 'url'));
		$this->load->view("utilizadores/newView");
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_user = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->get($id_user);

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		$tipo_user = $this->input->post('tipo_user');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'tipo_user' => $tipo_user,
			'email' => $email,
			'password' => $password,
		);
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->put($id, $data);
		
		redirect('utilizadores');
	}
	
	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('utilizadoresModel');

		$this->utilizadoresModel->delete($id);
		
		redirect('utilizadores');
	}


	
}
