<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">
        <form action="#" method="POST">
            Вы действительно хотите удалить товар: <br> <?php echo $product['type']; ?> <?php echo $product['name']; ?>
            <input id="submit" id="submit" type="submit" name="yes" value="ДА">
            <input id="submit" id="submit" type="submit" name="no" value="НЕТ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>