<?php
 //Page header
if(!function_exists('adminHeader'))
{
    function adminHeader()
    { 
        $ci = &get_instance();
        return $ci->load->view('template/admin/header');
    }
}
  
//load footer
if(!function_exists('adminFooter'))
{
    function adminFooter()
    {
        $ci = &get_instance();
        return $ci->load->view('template/admin/footer'); 
    }
}
//load banner
if(!function_exists('adminBanner'))
{
    function adminBanner()
    {
        $ci = &get_instance();
        return $ci->load->view('template/admin/banner'); 
    }
}
 
//load secondary bar
if(!function_exists('adminSecondaryBar'))
{
    function adminSecondaryBar()
    {
        $ci = &get_instance();
        return $ci->load->view('template/admin/secondary_bar'); 
    }
}

//load side bar
if(!function_exists('adminSideBar'))
{
    function adminSideBar()
    {
        $ci = &get_instance();
        return $ci->load->view('template/admin/sidebar.php'); 
    }
}

//Bring content to view
if(!function_exists('adminContent'))
{
    function adminContent($content='')
    {  
        //load header file
        $ci = &get_instance(); 
        if(!empty($content))
        {
            //provide left banner
            $data['content'] = $content; 
            $ci->load->view('template/admin/content',$data);
        }
        else
        {
            //provide left banner
            $data['content'] = "";
            $ci->load->view('template/admin/content',$data);
        }
    }
}