<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alunos extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('alunosModel');

		$alunos = $this->alunosModel->getAll();

		$data['alunos'] = $alunos;

		$this->load->view('Alunos/indexView', $data);
	}

	public function novoaluno()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$dados['ID_User'] = $this->input->post("ID_User");
			$dados['NomeAluno'] = $this->input->post("NomeAluno");
            $dados['NumeroEscolar'] = $this->input->post("NumeroEscolar");
            $dados['ContactoAluno'] = $this->input->post("ContactoAluno");
            $dados['MoradaAluno'] = $this->input->post("MoradaAluno");
            $dados['ID_Encarregado'] = $this->input->post("ID_Encarregado");
			$dados['ID_Turma'] = $this->input->post("ID_Turma");
			$dados['password'] = $this->input ->post("password");

			$this->load->model('alunosModel');

			$valid = $this->alunosModel->post($dados);

			redirect("alunos");

		}
		$this->load->helper(array('form', 'url'));
		$this->load->view("Alunos/newView");
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Aluno = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('alunosModel');

		$alunos = $this->alunosModel->get($ID_Aluno);

		$data['alunos'] = $alunos;

		$this->load->view('Alunos/editView', $data);
	}	


	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
        $ID_User = $this->input->post('ID_User');
        $NomeAluno = $this->input->post('NomeAluno');
        $NumeroEscolar = $this->input->post('NumeroEscolar');
        $ContactoAluno = $this->input->post('ContactoAluno');
        $MoradaAluno = $this->input->post('MoradaAluno');
		$ID_Encarregado = $this->input->post('ID_Encarregado');
		$ID_Turma = $this->input->post('ID_Turma');
		$password = $this->input->post('password');
		$data = array(
            'ID_User' => $ID_User,
            'NomeAluno' => $NomeAluno,
            'NumeroEscolar' => $NumeroEscolar,
            'ContactoAluno' => $ContactoAluno,
            'MoradaAluno' => $MoradaAluno,
            'ID_Encarregado' => $ID_Encarregado,
			'ID_Turma' => $ID_Turma,
			'password' => $password,
		);
		$this->load->model('alunosModel');

		$alunos = $this->alunosModel->put($id, $data);
		
		redirect('alunos');
	}
	
	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('alunosModel');

		$this->alunosModel->delete($id);
		
		redirect('alunos');
	}


	
}
