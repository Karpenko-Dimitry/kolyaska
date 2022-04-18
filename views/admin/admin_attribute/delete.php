<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">
        <form action="#" method="POST">
            Вы действительно хотите удалить атрибут: <br> <?php echo $attribute['color_name']; ?>
            <input id="submit" type="submit" name="yes" value="ДА">
            <input id="submit" type="submit" name="no" value="НЕТ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>