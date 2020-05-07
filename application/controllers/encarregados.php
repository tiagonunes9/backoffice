<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encarregados extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('encarregadosModel');

		$encarregados = $this->encarregadosModel->getAll();

		$data['encarregados'] = $encarregados;

		$this->load->view('Encarregados/indexView', $data);
	}

	public function novoencarregado()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $dados['ID_User'] = $this->input->post("ID_User");
            $dados['NomeEncarregado'] = $this->input->post("NomeEncarregado");
            $dados['ContactoEncarregado'] = $this->input->post("ContactoEncarregado");
			$dados['MoradaEncarregado'] = $this->input->post("MoradaEncarregado");
			$dados['NumeroEscolar'] = $this->input->post("NumeroEscolar");
			$dados['password'] = $this->input ->post("password");

			$this->load->model('encarregadosModel');

			$valid = $this->encarregadosModel->post($dados);

			redirect("encarregados");

		}
		$this->load->helper(array('form', 'url'));
		$this->load->view("Encarregados/newView");
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Encarregado = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('encarregadosModel');

		$encarregados = $this->encarregadosModel->get($ID_Encarregado);

		$data['encarregados'] = $encarregados;

		$this->load->view('Encarregados/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
        
		$ID_User = $this->input->post('ID_User');
		$NomeEncarregado = $this->input->post('NomeEncarregado');
        $ContactoEncarregado = $this->input->post('ContactoEncarregado');
		$MoradaEncarregado = $this->input->post('MoradaEncarregado');
		$NumeroEscolar = $this->input->post('NumeroEscolar');
		$password = $this->input->post('password');
		$data = array(
			'ID_User' => $ID_User,
            'NomeEncarregado' => $NomeEncarregado,
            'ContactoEncarregado' => $ContactoEncarregado,
			'MoradaEncarregado' => $MoradaEncarregado,
			'NumeroEscolar' => $NumeroEscolar,
			'password' => $password,
		);
		$this->load->model('encarregadosModel');

		$encarregados = $this->encarregadosModel->put($id, $data);
		
		redirect('encarregados');
	}
	
	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('encarregadosModel');

		$this->encarregadosModel->delete($id);
		
		redirect('encarregados');
	}


	
}
