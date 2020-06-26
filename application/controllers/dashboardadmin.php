<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboardadmin extends CI_Controller {

   
    public function index()
    {
        if(!(isset($_SESSION['admin'])) || $_SESSION['admin']==null){redirect(base_url());}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $this->input->post("email");
            $password = $this->input ->post("password");

            $this->load->model('adminModel');

            $valid = $this->adminModel->getValid($email, $password);

            if($valid)
            {
                redirect("dashboardadmin");
            }
        }

        $this->load->view('dashboardadmin/indexView');
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
