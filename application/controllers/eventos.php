<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->getAll();

		$data['eventos'] = $eventos;

		$this->load->view('eventos/indexView', $data);
	}

	public function novoevento()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['nome'] = $this->input->post("nome");
			$dados['local'] = $this->input ->post("local");
			$dados['descricao'] = $this->input ->post("descricao");
			$dados['autor'] = $this->input ->post("autor");
			$dados['estado'] = $this->input ->post("estado");
			$dados['imagem'] = $this->input ->post("imagem");
			$dados['data'] = $this->input ->post("data");
			
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
		$id_evento = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->get($id_evento);

		$data['eventos'] = $eventos;

		$this->load->view('eventos/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$nome = $this->input->post('nome');
		$local = $this->input->post('local');
		$descricao = $this->input->post('descricao');
		$autor = $this ->input ->post ('autor');
		$estado = $this ->input ->post ('estado');
		$imagem = $this ->input ->post ('imagem');
		$data = $this ->input ->post ('data');
		
		$data = array(
			'nome' => $nome,
			'local' => $local,
			'descricao' => $descricao,
			'autor' => $autor,
			'estado' => $estado,
			'imagem' => $imagem,
			'data' => $data,
			
		);
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->put($id, $data);
		
		redirect('eventos');
	}

	public function updateestado(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$estado = $this->input->post('estado');
		
		$data = array(
			'1' => $estado,
			
		);
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->put($id, $data);
		
		redirect('eventos');
	}
}
