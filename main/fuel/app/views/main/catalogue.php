<table>
    <tr>
        <td>書籍名</td>
        <td>タグ</td>
        <td>参考URL</td>
        <td>購入月</td> 
    </tr>
    
    <?php foreach ($this->book_data as $book) : ?>
        <tr>
            <td><?php echo $book['name']; ?></td>
            <td><?php echo 'tag'; ?></td>
            <td><a href="<?php echo $book['url']; ?>" target="_blank">リンク</a></td>
            <td><?php echo $book['purchase_month']; ?></td>
        </tr>
    <?php endforeach; ?>
    
</table>