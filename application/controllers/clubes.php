<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clubes extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('clubesModel');

		$clubes = $this->clubesModel->getAll();

		$data['clubes'] = $clubes;

		$this->load->view('clubes/indexView', $data);
	}

	public function clubes_lista() {
		$data['clubes'] = 'clubes'; 
		$this->load->model('clubesModel');
		$data['clubes'] = $this->base_model->getCourseAll();
		$data['clubes'] = $this->base_model->getdepartment();
		$this->load->view('clubes', $data);
	}

	public function controller_listar_professores ()
	{
		$this->load->model('clubesModel');

		$professor = $this->clubesModel->getbanklist();

		$data['professor'] = $professor;

		$this->load->view('turmas/newView', $data);
	}

	public function novoclube()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['NomeClube'] = $this->input->post("NomeClube");
			$dados['Descricao'] = $this->input ->post("Descricao");
			$dados['ID_Professor'] = $this->input ->post("ID_Professor");
			$dados['Horario'] = $this->input ->post("Horario");
			
			$this->load->model('clubesModel');

			$valid = $this->clubesModel->post($dados);

			redirect("clubes");
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->view("clubes/newView");
	}

	

	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('clubesModel');

		$this->clubesModel->delete($id);
		
		redirect('clubes');
	}

	

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Clube = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('clubesModel');

		$clubes = $this->clubesModel->get($ID_Clube);

		$data['clubes'] = $clubes;

		$this->load->view('clubes/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$NomeClube = $this->input->post('NomeClube');
		$Descricao = $this->input->post('Descricao');
		$ID_Professor = $this->input->post('ID_Professor');
		$Horario = $this ->input ->post ('Horario');
		
		$data = array(
			'NomeClube' => $NomeClube,
			'Descricao' => $Descricao,
			'ID_Professor' => $ID_Professor,
			'Horario' => $Horario,
			
		);
		$this->load->model('clubesModel');

		$clubes = $this->clubesModel->put($id, $data);
		
		redirect('clubes');
	}

	
}
