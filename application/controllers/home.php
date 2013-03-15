<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @desc Main controller
 * @author Jamshid Hashimi <jamshidhashimi@hotmail.com>
 * @version 1.0
 */
class Home extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->helper('template');
        $this->load->helper('admin');
    }
        
    function index()
    {
        $this->main();
    }
        
    function main()
    {
        putHeader();
        putMenu();
        putSlide();
        putLeft();
        putRight();
        putFooter();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */