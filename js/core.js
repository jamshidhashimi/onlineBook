/*load a content  by ajax with strign post data*/
function load_pagination(page,divname,starting,str)
{
    /*
     page: the server page where an ajax trigers
     starting: starting record 
     divname: where to display the server response text
     str: string where a user can send custome post data
    */
    var params='&starting='+starting+'&'+str;
    //call ajax 
    $.ajax({
       url: page,
       type: "POST",
       data: params,
       success: function(r){
           $('#'+divname).html(r);
       }
    });
}