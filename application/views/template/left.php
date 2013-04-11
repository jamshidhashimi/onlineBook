<div id="content">
    <div id="content_left">
        <div class="content_left_section">
            <h1>Categories</h1>
            <ul>
                <?php foreach($category AS $item): ?>
                <li><a href="#"><?=$item->name?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="content_left_section">
            <h1>Bestsellers</h1>
            <ul>
                <?php foreach($publisher AS $item): ?>
                <li><a href="#"><?=$item->name?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
  <!-- end of content left -->