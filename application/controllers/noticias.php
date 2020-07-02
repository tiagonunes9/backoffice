<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->getAll();

		$data['noticias'] = $noticias;

		$this->load->view('noticias/indexView', $data);
	}

	public function novanoticia()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['nome'] = $this->input->post("nome");
			$dados['local'] = $this->input ->post("local");
			$dados['descricao'] = $this->input ->post("descricao");
			$dados['autor'] = $this->input ->post("autor");
			$dados['estado'] = $this->input ->post("estado");
			$dados['imagem'] = $this->input ->post("imagem");
			$dados['data'] = $this->input ->post("data");
			
			$this->load->model('noticiasModel');

			$valid = $this->noticiasModel->post($dados);

			redirect("noticias");
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->view("noticias/newView");
	}

	

	public function delete(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));
		
		$this->load->model('noticiasModel');

		$this->noticiasModel->delete($id);
		
		redirect('noticias');
	}

	

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_noticia = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->get($id_noticia);

		$data['noticias'] = $noticias;

		$this->load->view('noticias/editView', $data);
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
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->put($id, $data);
		
		redirect('noticias');
	}

	public function updateestado(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));
		
		
		$estado = $this->input->post('estado');
		
		$data = array(
			'estado' => $estado,
			
		);
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->put($id, $data);
		
		redirect('noticias');
	}

	public function do_upload()
	{
		$config['upload_path']          = '../assets/img/upload';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1023;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('imagem')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('noticias');
		}
	}
}
