<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->getAll();

		$data['eventos'] = $eventos;

		$this->load->view('eventos/indexView', $data);
	}

	public function novoevento()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['NomeEvento'] = $this->input->post("NomeEvento");
			$dados['Descricao'] = $this->input ->post("Descricao");
			$dados['Data'] = $this->input ->post("Data");
			$dados['ID_Clube'] = $this->input ->post("ID_clube");
			
			$this->load->model('eventosModel');

			$valid = $this->eventosModel->post($dados);

			redirect("eventos");
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->view("eventos/newView");
	}

	

	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('eventosModel');

		$this->eventosModel->delete($id);
		
		redirect('eventos');
	}

	

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Evento = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->get($ID_Evento);

		$data['eventos'] = $eventos;

		$this->load->view('eventos/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$NomeEvento = $this->input->post('NomeEvento');
		$Descricao = $this->input->post('Descricao');
		$Data = $this->input->post('Data');
		$ID_Clube = $this ->input ->post ('ID_Clube');
		
		$data = array(
			'NomeEvento' => $NomeEvento,
			'Descricao' => $Descricao,
			'Data' => $Data,
			'ID_Clube' => $ID_Clube,
			
		);
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->put($id, $data);
		
		redirect('eventos');
	}
}
