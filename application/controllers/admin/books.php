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
        $this->load->helper('function');
        $this->load->library('pagination_class');
    }
        
    function index()
    {
        $this->get_books();
    }
    
    function get_books()
    {
        //integrate ajax pagination
        $str_post = '&ajax=1';
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
        * 1. total record
        * 2. starting of pagination like 0,10,20 etc
        * 3. record per page 10, or could be 50 according to config item
        * 4. link to url like personnel/home/getdetails
        * 5. div id to show the ajax returned data 
        * 6. any attachment post data to pass to the next ajax request
        */
        $this->pagination_class->paginate(
            $this->books_model->totalBooks(),
            $starting,
            10,
            base_url()."admin/books/get_books",
            'bookdiv',
            $str_post
        );

        $data['page']      = $starting;
        $data['links']     = $this->pagination_class->anchors;
        $data['total']     = $this->pagination_class->total;

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
    
    function add_book()
    {
        adminHeader();
        adminBanner();
        adminSecondaryBar();
        adminSideBar();
        $content = $this->load->view('admin/books_add','',TRUE);
        adminContent($content);
        adminFooter();    
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */