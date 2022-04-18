<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

<div class="container">
    <h2>Список заказов</h2>
    <table>
        <tr>
            <th>Зак. №</th>
            <th>Имя, <br> тел</th>
            <th>Дата</th>
            <th>Сумма</th>
            <th>Статус</th>
        </tr>

        <?php foreach ($orderList as $orderItem): ?>

            <tr>
                <th><a href="/admin/order/<?php echo $orderItem['id']; ?>"><?php echo $orderItem['id']; ?></a></th>
                <th><a href="/admin/order/<?php echo $orderItem['id']; ?>"><?php echo $orderItem['user_name']; ?>,
                        <br> <?php echo $orderItem['user_phone']; ?></a></th>
                <th><a href="/admin/order/<?php echo $orderItem['id']; ?>"><?php echo $orderItem['date']; ?></a></th>
                <th>
                    <a href="/admin/order/<?php echo $orderItem['id']; ?>"><?php echo $usd = $this->getOrderTotalPrice($orderItem['products']) ?>
                        гр</a></th>
                <?php if ($orderItem['status'] == 1): ?>
                    <th><a style="color: #2ded27;" href="/admin/order/<?php echo $orderItem['id']; ?>">Новый</a></th>
                <?php elseif ($orderItem['status'] == 2): ?>
                    <th><a href="/admin/order/<?php echo $orderItem['id']; ?>">В работе</a></th>
                <?php elseif ($orderItem['status'] == 3): ?>
                    <th><a style="color: #f74569;" href="/admin/order/<?php echo $orderItem['id']; ?>">Выполнен</a></th>
                <?php endif; ?>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>
