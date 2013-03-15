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
        $this->admin();
    }
    
    function admin()
    {
        adminHeader();
        adminBanner();
        adminSecondaryBar();
        adminSideBar();
        $content = $this->load->view('admin/dashboard_view','',TRUE);
        adminContent($content);
        adminFooter();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */