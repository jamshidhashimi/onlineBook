<div id="bookdiv">
<article class="module width_full">
    <header><h3 class="tabs_involved">Books list</h3>
    </header>

    <div class="tab_container">
    <table cellpadding="0" cellspacing="0" class="table" width="100%">
        <tr>
            <td class="no_rightborder">
                <div><?=$total?></div>
            </td>
            <td class="no_leftborder">
                <div><?=$links?></div>
            </td>
        </tr>
    </table>
        <table class="tablesorter" cellspacing="0"> 
        <thead> 
            <tr> 
                <th></th> 
                <th>Entry Name</th> 
                <th>Category</th> 
                <th>Created On</th> 
                <th>Actions</th> 
            </tr> 
        </thead> 
        <tbody>
            <?php $i=0; foreach($books AS $item): $i++; ?>
            <tr> 
                <td><?=$i?></td> 
                <td><?=$item->isbn?></td> 
                <td><?=$item->bookname?></td> 
                <td>5th April 2011</td> 
                <td><input type="image" src="<?=base_url()?>images/admin/icn_edit.png" title="Edit"><input type="image" src="<?=base_url()?>images/admin/icn_trash.png" title="Trash"></td> 
            </tr>
            <?php endforeach; ?>
        </tbody> 
        </table>

    </div><!-- end of .tab_container -->
</article><!-- end of content manager article -->
</div>