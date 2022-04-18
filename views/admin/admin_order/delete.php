<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">
        <form action="#" method="POST">
            Вы действительно хотите удалить заказ клиента:
            <br> <?php echo $orderItem['user_name'] . ' №' . $orderItem['id'] . ' от ' . $orderItem['date']; ?>
            <input id="submit" type="submit" name="yes" value="ДА">
            <input id="submit" type="submit" name="no" value="НЕТ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>