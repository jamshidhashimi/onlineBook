<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Get the header part of the page
 */
if(!function_exists('getHeader'))
{
    function getHeader($lang="")
    {
        $ci = &get_instance();
        return $ci->load->view('template/header_'.$lang.'');
    }   
}

/**
 * Get the footer part of the page
 */
if(!function_exists('getFooter'))
{
    function getFooter($lang="")
    {
        $ci = &get_instance();
        return $ci->load->view('template/footer');
    }   
}

/**
 * Get the right section of the page
 */
if(!function_exists('getRight'))
{
    function getRight($lang="")
    {
        $ci = &get_instance();
        return $ci->load->view('template/right');
    }   
}

/**
 * Get the left section
 */
if(!function_exists('getLeft'))
{
    function getLeft($lang="")
    {
        $ci = &get_instance();
        return $ci->load->view('template/left');
    }   
}