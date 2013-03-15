<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @desc Main controller
 * @author Jamshid Hashimi <jamshidhashimi@hotmail.com>
 * @version 1.0
 */
class Books extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->model('admin/books_model');
        $this->load->helper('admin');
        $this->load->library('Ajax_pagination');
    }
        
    function index()
    {
        $this->get_books();
    }
    
    function get_books()
    {
        //integrate ajax pagination
        $str_post_str = '&ajax=1';
        $starting = $this->input->post('starting');         //get counter which page record 
        //if its the first page than show starting from 0
        if(!$starting) 
        {
            $starting  = 0;
        }      
        //if its first page loading initialize counter to 1 
        $data['books'] = $this->books_model->getBooks(array('lang' => 'en', 'nrecords' => 10, 'offset' => $starting));
        
        //ajax engine pagination
        /*
        * params:
        * 1.total record
        * 2:starting of pagination like 0,10,20 etc
        * 3.record per page 10, or could be 50 according to config item
        * 4.First label translation
        * 5.Last label translation
        * 6.Previous lable translation
        * 7.Next lable translation
        * 8.page label translation
        * 9.of lable translation
        * 10.total lable translation
        * 11.link to url like personnel/home/getdetails
        * 12. div id to show the ajax returned data 
        * 13. any attachment post data to pass to the next ajax request
        */
        $this->ajax_pagination->make_search(
            $this->books_model->totalBooks(),
            $starting,
            10,
            'First',
            'Last',
            'Previous',
            'Next',
            'Page',
            'Of',
            'Total',
            base_url()."books/home/get_books",
            'bookdiv',
            $str_post_str
        );

        $data['page']      = $starting;
        $data['links']     = $this->ajax_pagination->anchors;
        $data['total']     = $this->ajax_pagination->total;

        //check whether the request is an ajax request 
        if($this->input->post('ajax')==1)
        {
            $this->load->view('admin/books_list',$data);
        }
        else
        {
            adminHeader();
            adminBanner();
            adminSecondaryBar();
            adminSideBar();
            $content = $this->load->view('admin/books_list',$data,TRUE);
            adminContent($content);
            adminFooter();
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */