<?php require(ROOT . '/views/layouts/header.php'); ?>

<div class="cabinet">
    <div class="container">

        <div class="product-in-cart">
            <h1>История заказов</h1>
            <?php if ($orderList): ?>
                <?php foreach ($orderList as $orderItem): ?>
                    <h2>Заказ №<?php echo $orderItem['id'] ?> от <?php echo $orderItem['date'] ?></h2>

                    <table>
                        <tr>
                            <th>Товар</th>
                            <th>Цена</th>
                            <th colspan="2">Количество</th>
                        </tr>
                        <?php foreach (json_decode($orderItem['products'], true) as $productId => $productOption): ?>
                            <tr>
                                <td><?php $product = ProductModel::getProductItemById($productId);
                                    echo $product['type'] . ' ' . $product['name'] ?></td>
                                <td><?php echo Exchange::formatPrice($productOption['price']); ?> <?= $productOption['period'] ?></td>
                                <td><?php echo $productOption['count']; ?> шт.</td>
                                <td><?php echo Exchange::formatPrice($productOption['count'] * $productOption['price']); ?>
                                    грн.
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">Итого</td>
                            <td><?php echo OrderModel::getOrderTotalPrice($orderItem['products']) ?> <?= $orderItem['period'] ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                <?php endforeach; ?>

            <?php else: ?>
                <p>У вас нет истории заказов. Ждем вас в списке наших клиентов</p>
            <?php endif; ?></div>
    </div>
</div>
</div>

<?php require(ROOT . '/views/layouts/footer.php'); ?>
