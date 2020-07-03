<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class utilizadores extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('utilizadoresModel');
	}

	public function index()
	{
		if (!(isset($_SESSION['admin'])) || $_SESSION['admin'] == null) {
			redirect(base_url());
		}
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->getAll();

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/indexView', $data);
	}

	public function novoutilizador()
	{
		
		$this->load->library('upload', config_upload());
		$this->upload->do_upload('imagem');
		$dados_upload = $this->upload->data();
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['tipo_user'] = $this->input->post("tipo_user");
			$dados['email'] = $this->input->post("email");
			$dados['password'] = $this->input->post("password");
			$dados['nome'] = $this->input->post("nome");
			$dados['morada'] = $this->input->post("morada");
			$dados['contato'] = $this->input->post("contato");
			$dados['imagem'] = $dados_upload['file_name'];

			$this->load->model('utilizadoresModel');

			$valid = $this->utilizadoresModel->post($dados);

			redirect("utilizadores");
		}

		$this->load->helper(array('form', 'url'));
		$this->load->view("utilizadores/newView");
	}

	public function uptade()
	{
		$uri = &load_class('URI', 'core');
		$id_user = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->get($id_user);

		$data['utilizadores'] = $utilizadores;

		$this->load->view('utilizadores/editView', $data);
	}


	public function update()
	{
		$uri = &load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));

		$tipo_user = $this->input->post('tipo_user');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nome = $this->input->post('nome');
		$data = array(
			'tipo_user' => $tipo_user,
			'email' => $email,
			'password' => $password,
			'nome' => $nome,
		);
		$this->load->model('utilizadoresModel');

		$utilizadores = $this->utilizadoresModel->put($id, $data);

		redirect('utilizadores');
	}

	public function delete()
	{
		$uri = &load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form', 'url'));

		$this->load->model('utilizadoresModel');

		$this->utilizadoresModel->delete($id);

		redirect('utilizadores');
	}

	public function do_upload()
	{
		$config['upload_path']          = '../assets/img/upload';
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

			$this->load->view('utilizadores');
		}
	}

}
