<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboardadmin extends CI_Controller {

   
    public function index()
    {
        if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
        $this->load->model('eventosModel');
        $this->load->model('noticiasModel');

        $noticias = $this->noticiasModel->getAll();

        $data['noticias'] = $noticias;
        
		$eventos = $this->eventosModel->getAll();

		$data['eventos'] = $eventos;

		$this->load->view('dashboardadmin/indexView.php', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
