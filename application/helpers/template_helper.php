<?php
 //Page header
if(!function_exists('putHeader'))
{
    function putHeader()
    { 
        $ci = &get_instance();
        return $ci->load->view('template/header_en');
    }
}
  
//load footer
if(!function_exists('putFooter'))
{
    function putFooter()
    {
        $ci = &get_instance();
        $footers        = $ci->static_model->getData('footer','en');
        $data['footer'] = $footers;
        return $ci->load->view('template/footer',$data); 
    }
}
//load Menu
if(!function_exists('putMenu'))
{
    function putMenu()
    {
        $ci = &get_instance();
        $ci->load->model('static/static_model');
        $menus      = $ci->static_model->getData('menu','en');
        $categories = $ci->static_model->getData('category','en');
        $data['menu']       = $menus;
        $data['category']   = $categories;
        return $ci->load->view('template/menu',$data); 
    }
}
//load footer
if(!function_exists('putSlide'))
{
    function putSlide()
    {
        $ci = &get_instance();
        return $ci->load->view('template/slides');  
    }
}
 
//left tpl
if(!function_exists('putLeft'))
{
    function putLeft()
    {
        $ci = &get_instance();
        $ci->load->model('static/static_model');
        $categories = $ci->static_model->getData('category','en');
        $publishers = $ci->static_model->getData('publisher','en');
        $data['category']   = $categories;
        $data['publisher']  = $publishers;
        return $ci->load->view('template/left',$data);
    }
}

//left tpl
if(!function_exists('putRight'))
{
    function putRight()
    {
        $ci = &get_instance();
        $ci->load->model('books/books_model');
        $records = $ci->books_model->getBooks();
        $data['books'] = $records;
        return $ci->load->view('template/right',$data);
    }
}

//Bring content to view
if(!function_exists('putContent'))
{
    function putContent($content='')
    {  
        //load header file
        $ci = &get_instance(); 
        if(!empty($content))
        {
            //provide left banner
            $data['content'] = $content; 
            $ci->load->view('template/content',$data);
        }
        else
        {
            //provide left banner
            $data['content'] = "";
            $ci->load->view('template/content',$data);
        }
    }
}