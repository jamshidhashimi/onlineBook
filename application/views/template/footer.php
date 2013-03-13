<div class="cleaner_with_height">&nbsp;</div>
<hr />
<!-- end of content -->
<div id="footer">
    <?php $i=1; foreach($footer AS $item):?>
        <a href="#"><?=$item->name?></a> <?php if(count($footer)==$i): echo ''; else: echo '|'; endif; ?>
    <?php $i++; endforeach; ?><br />
Copyright &copy; 2013 <a href="http://wwww.books.af/"><strong>Books.af</strong></a> | Designed by <a href="http://www.novartis.af">Novartis</a> </div>
<hr />
<!-- end of footer -->
<!-- end of container -->
</body>
</html>