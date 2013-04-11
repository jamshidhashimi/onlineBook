<article class="module width_full">
    <header><h3 class="tabs_involved">Add Book</h3>
        <ul class="tabs">
            <li onclick="parent.location='<?=base_url()?>admin/books/get_books'"><a href="#">Books List</a></li>
         </ul>
    </header>

    <div class="tab_container">
        <table cellpadding="0" cellspacing="0" class="table" width="100%">
            <tbody>
                <tr>
                    <td style="width: 40%">
                        <div>
                            <strong>ISBN:</strong>
                        </div>
                        <div>
                            <input type="text" id="isbn" name="isbn" />
                        </div>
                    </td>

                    <td style="width: 60%">
                        <div>
                            <strong>Book Name:</strong>
                        </div>
                        <div>
                            <input type="text" id="book_name" name="book_name" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <strong>Publisher:</strong>
                        </div>
                        <div>
                            <select id="publisher" name="publisher">
                                <?=stable('publisher','en')?>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Publish Place:</strong>
                        </div>
                        <div>
                            <input type="text" id="publish_place" name="publish_place" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <strong>Publish Date:</strong>
                        </div>
                        <div>
                            <select><?=bringDays()?></select>
                            <select><?=bringMonths()?></select>
                            <select><?=bringYears()?></select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Page Numbers:</strong>
                        </div>
                        <div>
                            <input type="text" id="page_number" name="page_number" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%">
                        <div>
                            <strong>Size:</strong>
                        </div>
                        <div>
                            <input type="text" id="size" name="size" />
                        </div>
                    </td>

                    <td>
                        <div>
                            <strong>Year:</strong>
                        </div>
                        <div>
                            <select><?=bringYears()?></select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <strong>Language:</strong>
                        </div>
                        <div>
                            <select id="language" name="language">
                                <?=stable('language','en')?>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Category:</strong>
                        </div>
                        <div>
                            <select id="category" name="category">
                                <?=stable('category','en')?>
                            </select>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <div>
                            <strong>Price:</strong>
                        </div>
                        <div>
                            <div>
                                <input type="text" id="price" name="price" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Content:</strong>
                        </div>
                        <div>
                            <textarea id="content" name="content"></textarea>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <div>
                            <strong>Bookstore:</strong>
                        </div>
                        <div>
                            <div>
                                <select id="bookstore" name="bookstore">
                                    <?=stable('bookstore','en')?>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Image:</strong>
                        </div>
                        <div>
                            <input type="file" id="book_image" name="book_image" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <strong>Stock</strong>
                        </div>
                        <div>
                            <input type="text" id="stock" name="stock" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</article>