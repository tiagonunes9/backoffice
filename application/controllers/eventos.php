<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller
{

	public function index()
	{
		if (!(isset($_SESSION['admin'])) || $_SESSION['admin'] == null) {
			redirect(base_url());
		}
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->getAll();

		$data['eventos'] = $eventos;

		$this->load->view('eventos/indexView', $data);
	}

	public function novoevento()
	{
		
		$this->load->library('upload', config_upload());
		$this->upload->do_upload('imagem');
		$dados_upload = $this->upload->data();
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['nome'] = $this->input->post("nome");
			$dados['local'] = $this->input->post("local");
			$dados['descricao'] = $this->input->post("descricao");
			$dados['autor'] = $this->input->post("autor");
			$dados['estado'] = $this->input->post("estado");
			$dados['data'] = $this->input->post("data");
			$dados['imagem'] = $dados_upload['file_name'];

			$this->load->model('eventosModel');

			$valid = $this->eventosModel->post($dados);

			redirect("eventos");
		}

		$this->load->helper(array('form', 'url'));
		$this->load->view("eventos/newView");
	}



	public function delete()
	{
		$uri = &load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));

		$this->load->model('eventosModel');

		$this->eventosModel->delete($id);

		redirect('dashboardadmin');
	}



	public function uptade()
	{
		$uri = &load_class('URI', 'core');
		$id_evento = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->get($id_evento);

		$data['eventos'] = $eventos;

		$this->load->view('eventos/editView', $data);
	}

	public function update()
	{
		$uri = &load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));


		$nome = $this->input->post('nome');
		$local = $this->input->post('local');
		$descricao = $this->input->post('descricao');
		$autor = $this->input->post('autor');
		$estado = $this->input->post('estado');
		$data = $this->input->post('data');

		$data = array(
			'nome' => $nome,
			'local' => $local,
			'descricao' => $descricao,
			'autor' => $autor,
			'estado' => $estado,
			'data' => $data,

		);
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->put($id, $data);

		redirect('eventos');
	}

	public function updateestado()
	{
		$uri = &load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));


		$estado = $this->input->post('estado');

		$data = array(
			'estado' => $estado,

		);
		$this->load->model('eventosModel');

		$eventos = $this->eventosModel->put($id, $data);

		redirect('eventos');
	}

	public function do_upload()
	{
		$config['upload_path']          = 'upload/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100;
		$config['max_width']            = 1023;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('imagem')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('eventos');
		}
	}
}
