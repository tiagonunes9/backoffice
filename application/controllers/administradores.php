<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administradores extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('administradoresModel');

		$administradores = $this->administradoresModel->getAll();

		$data['administradores'] = $administradores;

		$this->load->view('administradores/indexView', $data);
	}

	public function novoadmin()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['UsernameAdmin'] = $this->input->post("UsernameAdmin");
			$dados['EmailAdmin'] = $this->input ->post("EmailAdmin");
			$dados['passwordAdmin'] = $this->input ->post("passwordAdmin");
			
			$this->load->model('administradoresModel');

			$valid = $this->administradoresModel->post($dados);

			redirect("administradores");
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->view("administradores/newView");
	}

	

	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('administradoresModel');

		$this->administradoresModel->delete($id);
		
		redirect('administradores');
	}

	

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_admin = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('administradoresModel');

		$administradores = $this->administradoresModel->get($id_admin);

		$data['administradores'] = $administradores;

		$this->load->view('administradores/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		$UsernameAdmin = $this->input->post('UsernameAdmin');
		$EmailAdmin = $this->input->post('EmailAdmin');
		$passwordAdmin = $this->input->post('passwordAdmin');
		
		$data = array(
			'UsernameAdmin' => $UsernameAdmin,
			'EmailAdmin' => $EmailAdmin,
			'passwordAdmin' => $passwordAdmin,
			
		);
		$this->load->model('administradoresModel');

		$administradores = $this->administradoresModel->put($id, $data);
		
		redirect('administradores');
	}

}
