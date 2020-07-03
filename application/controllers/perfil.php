<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class perfil extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
		$this->load->model('perfilModel');

		$perfil = $this->perfilModel->getAll();

		$data['perfil'] = $perfil;

		$this->load->view('perfil/indexView', $data);
	}

	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_user = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('perfilModel');

		$perfil = $this->perfilModel->get($id_user);

		$data['perfil'] = $perfil;

		$this->load->view('perfil/indexView', $data);
	}	

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->library('upload', config_upload());
		$this->upload->do_upload('imagem');
		$dados_upload = $this->upload->data();

		$this->load->helper(array('form'));
		

		$imagem = $dados_upload['file_name'];

		

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$morada = $this->input->post('morada');
		$contato = $this->input->post('contato');
		//$imagem = $this->input->post('imagem');
		$nome = $this->input->post('nome');
		$data = array(
			'email' => $email,
			'password' => $password,
			'morada' => $morada,
			'contato' => $contato,
			'imagem' => $imagem,
			'nome' => $nome,
			
		);
		$this->load->model('perfilModel');

		$perfil = $this->perfilModel->put($id, $data);
		
		redirect('perfil');
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

			$this->load->view('perfil');
		}
	}
}
