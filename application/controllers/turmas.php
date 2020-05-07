<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Turmas extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('turmasModel');

		$turma = $this->turmasModel->getAll();

		$data['turmas'] = $turma;

		$this->load->view('turmas/indexView', $data);
	}

	public function novaturma()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['Ano'] = $this->input->post("Ano");
			$dados['LetraTurma'] = $this->input ->post("LetraTurma");
			$dados['ID_Professor'] = $this->input ->post("ID_Professor");
			$dados['AnoLetivo'] = $this->input ->post("AnoLetivo");
			
			$this->load->model('turmasModel');

			$valid = $this->turmasModel->post($dados);

			redirect("turmas");
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->view("turmas/newView");
	}

	

	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('turmasModel');

		$this->turmasModel->delete($id);
		
		redirect('turmas');
	}

	

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Turma = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('turmasModel');

		$turmas = $this->turmasModel->get($ID_Turma);

		$data['turmas'] = $turmas;

		$this->load->view('turmas/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$Ano = $this->input->post('Ano');
		$LetraTurma = $this->input->post('LetraTurma');
		$ID_Professor = $this->input->post('ID_Professor');
		$AnoLetivo = $this ->input ->post ('AnoLetivo');
		
		$data = array(
			'Ano' => $Ano,
			'LetraTurma' => $LetraTurma,
			'ID_Professor' => $ID_Professor,
			'AnoLetivo' => $AnoLetivo,
			
		);
		$this->load->model('turmasModel');

		$turmas = $this->turmasModel->put($id, $data);
		
		redirect('turmas');
	}
	public function controller_listar_professores ()
	{
		$this->load->model('listar_professores');

		$professor = $this->listar_professores->getAll();

		$data['professor'] = $professor;

		$this->load->view('Turmas/indexView', $data);
	}
	
	
	
 

}
