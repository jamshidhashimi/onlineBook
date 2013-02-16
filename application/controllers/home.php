<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//test
class Home extends CI_Controller {
    
    public function index()
    {
        $this->load->view('welcome_message');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */