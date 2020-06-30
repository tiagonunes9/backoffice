<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class suporte extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->getAll();

		$data['suporte'] = $suporte;

		$this->load->view('suporte/indexView', $data);
	}


	
	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$id_suporte = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->get($id_suporte);

		$data['suporte'] = $suporte;

		$this->load->view('suporte/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));

		$nome = $this->input->post('nome');
		$assunto = $this->input->post('assunto');
		$mensagem = $this->input->post('mensagem');
		$responsavel = $this ->input ->post ('responsavel');
		$estado = $this ->input ->post ('estado');
		$email = $this ->input ->post ('email');
		
		$data = array(
			'nome' => $nome,
			'assunto' => $assunto,
			'mensagem' => $mensagem,
			'responsavel' => $responsavel,
			'estado' => $estado,
			'email' => $email,
			
		);
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->put($id, $data);
		
		redirect('suporte');
	}
}
