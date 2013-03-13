<div id="container">
    <hr />
    <div id="menu">
        <ul>
            <?php foreach($menu AS $item):?>
            <?php if($item->name=='Home'): ?>
            <li><a href="#" class="current"><?=$item->name?></a></li>
            <?php else: ?>
            <li><a href="#"><?=$item->name?></a></li>
            <?php endif; endforeach; ?>
            <li><input type="text" name="search" id="search" value="" placeholder="Search Books" /></li>
            <li>
                <select name="book_cat" id="book_cat" style="width:200px">
                    <option value="">All Category</option>
                    <?php foreach($category AS $item): ?>
                    <option value="<?=$item->id?>"><?=$item->name?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <input class="search_book" type="button" name="search_btn" id="search_btn" value="Search" />
            </li>
        </ul>
    </div>
    <hr />

<!-- end of menu -->