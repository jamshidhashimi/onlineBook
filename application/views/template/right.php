<div id="content_right">
    <?php $i=1; foreach($books AS $item): if($i % 2 == 0): $side='height'; else: $side='width'; endif; ?>
    <div class="product_box">
        <h1><?=$item->bookname?></h1>
        <img src="<?=base_url()?>images/books/<?=$item->image?>" width="100px;" height="150px;" alt="" />
        <div class="product_info">
            <p><?=substr($item->content,0,90)?></p>
            <h3>$<?=$item->price?></h3>
            <div class=""><a href="#">Buy Now</a></div>
            <div class=""><a href="#">Detail</a></div>
        </div>
        <div class="cleaner">&nbsp;</div>
    </div>
    <div class="cleaner_with_<?=$side?>">&nbsp;</div>
    <?php $i++; endforeach; ?>
</div>
<!-- end of content right -->