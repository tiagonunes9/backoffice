<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventosnoticias extends CI_Controller {

   
    public function index()
    {
        if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $UsernameAdmin = $this->input->post("UsernameAdmin");
            $passwordAdmin = $this->input ->post("passwordAdmin");

            $this->load->model('userModel');

            $valid = $this->userModel->getValid($UsernameAdmin, $passwordAdmin);

            if($valid)
            {
                redirect("auth");
            }
        }

        $this->load->view('eventosnoticias/indexView');
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
