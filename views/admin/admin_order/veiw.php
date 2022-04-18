<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

<div class="container">
    <h2>Заказ №<?php echo $orderItem['id']; ?> от <?php echo $orderItem['date']; ?></h2>
    <p>
        Имя заказчика: <?php echo $orderItem['user_name']; ?> <?php if ($orderItem['user_id']) {
            echo '#' . $orderItem['user_id'];
        } ?>
    </p>

    <p>
        Телефон заказчика: <a
                href="tel:<?php echo $orderItem['user_phone']; ?>"><?php echo $orderItem['user_phone']; ?></a>
    </p>

    <p>
        Комментарий к заказу: <br><?php echo $orderItem['user_comment']; ?>
    </p>
    <p>
        Статус:
        <?php if ($orderItem['status'] == 1): ?>
            <span style="color: #2ded27;">Новый заказ</span>
        <?php elseif ($orderItem['status'] == 2): ?>
            <span style="color: #f7941d;">Заказ в работе</span>
        <?php elseif ($orderItem['status'] == 3): ?>
            <span style="color: #f74569;">Заказ выполнен</span>
        <?php endif; ?>
    </p>

    <table>
        <tr>
            <td>Название</td>
            <td>Цена</td>
            <td>Кол</td>
            <td>Сумма</td>
        </tr>
        <?php foreach ($products as $productItem): ?>
            <tr>
                <td>
                    <?php echo $productItem['type'] . ' ' . $productItem['name'] ?>
                </td>
                <td>
                    <?php echo Exchange::formatPrice($productsInOrder[$productItem['id']]['price']) . ' ' . $productsInOrder[$productItem['id']]['period'] ?>
                </td>
                <td>
                    <?php echo $productsInOrder[$productItem['id']]['count'] ?>
                </td>
                <td>
                    <?php echo Exchange::formatPrice($productsInOrder[$productItem['id']]['price'] * $productsInOrder[$productItem['id']]['count']) . ' ' . $productsInOrder[$productItem['id']]['period'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">
                Итого: <?php echo Exchange::formatPrice($this->getOrderTotalPrice($orderItem['products'])) . ' ' . $orderItem['period']; ?>
            </td>
        </tr>
    </table>

    <div class="botton-block">
        <a class="button" href="/admin/order/delete/<?php echo $orderItem['id']; ?>">Удалить</a>
        <a class="button" href="">Редактировать</a>
    </div>
</div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>
