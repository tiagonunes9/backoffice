<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

   
    public function index()
    {
        if(!(isset($_SESSION['UsernameAdmin'])) || $_SESSION['UsernameAdmin']==null){redirect(base_url());}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $this->input->post("email");
            $password = $this->input ->post("password");

            $this->load->model('adminModel');

            $valid = $this->adminModel->getValid($email, $password);

            if($valid)
            {
                redirect("Estatistica");
            }
        }

        $this->load->view('Home/indexView');
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
