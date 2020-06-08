<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class perfil extends CI_Controller {

	public function index()
	{
		if(!(isset($_SESSION['email'])) || $_SESSION['email']==null){redirect(base_url());}
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->getAll();

		$data['noticias'] = $noticias;

		$this->load->view('perfil/indexView', $data);
	}

	public function novanoticia()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$dados['NomeNoticia'] = $this->input->post("NomeNoticia");
			$dados['DescricaoNoticia'] = $this->input ->post("DescricaoNoticia");
			$dados['DataNoticia'] = $this->input ->post("DataNoticia");
			$dados['ID_Noticia'] = $this->input ->post("ID_Noticia");
			$dados['ClubeNoticia'] = $this->input ->post("ClubeNoticia");
			$dados['ProfNoticia'] = $this->input ->post("ProfNoticia");
			
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
		$ID_Noticia = $uri->segment(3);

		$this->load->helper(array('form'));
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->get($ID_Noticia);

		$data['noticias'] = $noticias;

		$this->load->view('noticias/editView', $data);
	}

	public function update(){
		$uri =& load_class('URI', 'core');
		$id = $uri->segment(3);

		$this->load->helper(array('form'));

		$NomeNoticia = $this->input->post('NomeNoticia');
		$DescricaoNoticia = $this->input->post('DescricaoNoticia');
		$DataNoticia = $this->input->post('DataNoticia');
		$ClubeNoticia = $this ->input ->post ('ClubeNoticia');
		$ProfNoticia = $this ->input ->post ('ProfNoticia');
		
		$data = array(
			'NomeNoticia' => $NomeNoticia,
			'DescricaoNoticia' => $DescricaoNoticia,
			'DataNoticia' => $DataNoticia,
			'ClubeNoticia' => $ClubeNoticia,
			'ProfNoticia' => $ProfNoticia,
			
		);
		$this->load->model('noticiasModel');

		$noticias = $this->noticiasModel->put($id, $data);
		
		redirect('noticias');
	}
}
