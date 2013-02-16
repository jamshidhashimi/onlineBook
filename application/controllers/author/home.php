<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jamshid Hashimi <jamshidhashimi@hotmail.com>
 * @version 1.0
 * @copyright (c) 2013, Novartis
 * 
 * Controller for Author
 */
class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('author/author_model');
    }
    
    /**
     * The default function of the class
     */
    public function index()
    {
        $this->get_records();
    }
    
    /**
     * Get records
     */
    public function get_records(){
        $data['records'] = $this->author_model->get_all_records();
        
        $view = $this->load->view('author/author_list',$data,TRUE);
        getHeader();
        getRight();
        getLeft();
        getContent($view);
        getFooter();
    }
    
    /**
     * Add record function
     */
    public function add_records(){
        //set validation rules
        $this->form_validation->set_rules('name', $this->lang->line('author_name'), 'required');
        $this->form_validation->set_error_delimiters('<span class="error redcolor">', '</span>');
        //if validation is false
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
            $view = $this->load->view('author/author_list','',TRUE);
            getHeader();
            getRight();
            getLeft();
            getContent($view);
            getFooter();
        }
        else
        {
            $form_data = array(
                'name'      => $this->input->post('name')
            );       
            // run insert model to write data to db
            if ($this->author_model->add_record($form_data) == TRUE) 
            {
                //set success message for the end user
                $this->session->set_flashdata('msg',$this->lang->line('insert_successful_msg'));
                // the information has therefore been successfully saved in the db                                                
                redirect('author/home/get_records','refresh');   // or whatever logic needs to occur
            }
            else
            {
                $this->session->set_flashdata('msg',$this->lang->line('insert_error_msg'));
                // Or whatever error handling is necessary
                redirect('author/home/get_records','refresh'); 
            }       
        }
    }
    
    /** 
     * @param int $author_id
     * @return mixed
     * 
     * update record function
     */
    public function update_record($author_id=0){
        if($author_id==0){return;}
        //set validation rules
        $this->form_validation->set_rules('name', $this->lang->line('author_name'), 'required');
        $this->form_validation->set_error_delimiters('<span class="error redcolor">', '</span>');
        
        $data['records'] = $this->author_model->get_records($author_id);
        //if validation is false
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
            $view = $this->load->view('author/author_list',$data,TRUE);
            getHeader();
            getRight();
            getLeft();
            getContent($view);
            getFooter();
        }
        else
        {
            $form_data = array(
                'name'      => $this->input->post('name')
            );       
            // run insert model to write data to db
            if ($this->author_model->update_record($form_data) == TRUE) 
            {
                //set success message for the end user
                $this->session->set_flashdata('msg',$this->lang->line('update_successful_msg'));
                // the information has therefore been successfully saved in the db                                                
                redirect('author/home/get_records','refresh');   // or whatever logic needs to occur
            }
            else
            {
                $this->session->set_flashdata('msg',$this->lang->line('update_error_msg'));
                // Or whatever error handling is necessary
                redirect('author/home/get_records','refresh'); 
            }       
        }
    }
}

/* End of file home.php */
/* Location: ./application/controllers/author/home.php */