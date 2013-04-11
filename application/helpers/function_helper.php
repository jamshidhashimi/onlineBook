<?php
 //Page header
if(!function_exists('stable'))
{
    function stable($table='',$lang='en',$value='')
    { 
        if(empty($table) || empty($lang)){
            return;
        }
        
        $ci = &get_instance();
        $ci->load->model('admin/static_model');
        $records = $ci->static_model->bringData($table,$lang);
        $str = '';
        //if we are in an adding section
        if(empty($value)){
            $str = '<option value="">Select an item</option>';
        }
        foreach($records AS $item){
            if($item->id==$value){
                $str .= '<option id="'.$item->id.'" name="'.$item->id.'" selected="selected">'.$item->name.'</option>';
            }else{
                $str .= '<option id="'.$item->id.'" name="'.$item->id.'">'.$item->name.'</option>';
            }
        }
        return $str;
    }
}

if(!function_exists('bringMonths'))
{
    function bringMonths($lang='en',$value='')
    {
        $ci = &get_instance();
        $ci->lang->load('date');
        $months = $ci->lang->line('date_monthsnames_en');
        
        if(empty($value)){
            $monthStr = '<option value="">Month</option>';
        }else{
            $monthStr = '';
        }
        for($i=1; $i<=count($months); $i++){
            $monthStr .= '<option value="'.$i.'">'.$months[$i].'</option>';
        }
        return $monthStr;
    }
}

if(!function_exists('bringDays'))
{
    function bringDays($lang='en',$value='')
    {
        if(empty($value)){
            $days = '<option value="">Day</option>';
        }else{
            $days = '';
        }
        for($i=1; $i<=31; $i++){
            $days .= '<option value="'.$i.'">'.$i.'</option>';
        }
        return $days;
    }
}

if(!function_exists('bringYears'))
{
    function bringYears($lang='en',$value='')
    {
        if(empty($value)){
            $years = '<option value="">Year</option>';
        }else{
            $years = '';
        }
        $currentYear = date('Y');
        for($i=1950; $i<=$currentYear + 10; $i++){
            $years .= '<option value="'.$i.'">'.$i.'</option>';
        }
        return $years;
    }
}