<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class suporte extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['email'])) || $_SESSION['email']==null){redirect(base_url());}
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->getAll();

		$data['suporte'] = $suporte;

		$this->load->view('suporte/indexView', $data);
	}


	
	public function uptade()
	{
		$uri =& load_class('URI', 'core');
		$ID_Noticia = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->get($ID_Noticia);

		$data['suporte'] = $suporte;

		$this->load->view('suporte/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));

		$nome = $this->input->post('nome');
		$DescricaoNoticia = $this->input->post('DescricaoNoticia');
		$DataNoticia = $this->input->post('DataNoticia');
		$ClubeNoticia = $this ->input ->post ('ClubeNoticia');
		$ProfNoticia = $this ->input ->post ('ProfNoticia');
		
		$data = array(
			'nome' => $nome,
			'DescricaoNoticia' => $DescricaoNoticia,
			'DataNoticia' => $DataNoticia,
			'ClubeNoticia' => $ClubeNoticia,
			'ProfNoticia' => $ProfNoticia,
			
		);
		$this->load->model('suporteModel');

		$suporte = $this->suporteModel->put($id, $data);
		
		redirect('suporte');
	}
}
