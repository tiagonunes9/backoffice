<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilizadores extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/indexView', $data);
	}

	public function novoutilizador()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$dados['TipoUser'] = $this->input->post("TipoUser");
			$dados['NumeroEscolar'] = $this->input->post("NumeroEscolar");
			$dados['Password'] = $this->input ->post("Password");

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
		$ID_User = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->get($ID_User);

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		$TipoUser = $this->input->post('TipoUser');
		$NumeroEscolar = $this->input->post('NumeroEscolar');
		$Password = $this->input->post('Password');
		$data = array(
			'TipoUser' => $TipoUser,
			'NumeroEscolar' => $NumeroEscolar,
			'Password' => $Password,
		);
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadorModel->put($id, $data);
		
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
