<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professores extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('professoresModel');

		$professores = $this->professoresModel->getAll();

		$data['professores'] = $professores;

		$this->load->view('Professores/indexView', $data);
	}

	public function novoprofessor()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $dados['NomeProfessor'] = $this->input->post("NomeProfessor");
            $dados['ContactoProfessor'] = $this->input->post("ContactoProfessor");
            $dados['MoradaProfessor'] = $this->input->post("MoradaProfessor");
            $dados['ID_User'] = $this->input->post("ID_User");
			$dados['NumeroEscolar'] = $this->input->post("NumeroEscolar");
			$dados['password'] = $this->input ->post("password");

			$this->load->model('professoresModel');

			$valid = $this->professoresModel->post($dados);

			redirect("professores");

		}
		$this->load->helper(array('form', 'url'));
		$this->load->view("Professores/newView");
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Professor = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('professoresModel');

		$professores = $this->professoresModel->get($ID_Professor);

		$data['professores'] = $professores;

		$this->load->view('Professores/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
        
        $NomeProfessor = $this->input->post('NomeProfessor');
		$MoradaProfessor = $this->input->post('MoradaProfessor');
		$ContactoProfessor = $this->input->post('ContactoProfessor');
		$ID_User = $this->input->post('ID_User');
		$NumeroEscolar = $this->input->post('NumeroEscolar');
		$password = $this->input->post('password');
		$data = array(
			'NomeProfessor' => $NomeProfessor,
			'MoradaProfessor' => $MoradaProfessor,
            'ContactoProfessor' => $ContactoProfessor,
            'ID_User' => $ID_User,
			'NumeroEscolar' => $NumeroEscolar,
			'password' => $password,
		);
		$this->load->model('professoresModel');

		$professores = $this->professoresModel->put($id, $data);
		
		redirect('professores');
	}

	public function delete($id){
		$query = "DELETE FROM professores WHERE ID_Professor = '$id';";
		$this->db->where('ID_Professor', $id);
		$test = $this->db->get('turma');

		if(empty($test->result_array())){

		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('professoresModel');

		$this->professoresModel->delete($id);
		
		redirect('professores');

		} 
		else {
			echo 'Esse Professor está associado a uma tabela. Não pode ser apagado';
		}
	
}
}