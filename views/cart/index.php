<?php require(ROOT . '/views/layouts/header.php'); ?>

    <div class="cart">
        <div class="container">

            <div class="product-in-cart">
                <h1>Корзина</h1>
                <?php if ($productsInCart): ?>

                    <table>
                        <tr>
                            <th>Товар</th>
                            <th>Цена</th>
                            <th>Кол-во</th>
                            <th>Стоимость</th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <?php foreach ($products as $productItem): ?>
                            <tr>
                                <td><?php echo $productItem['name'] ?>
                                    <?php if ($productsInCart[$productItem['id']]['color'] !== 'undefined'): ?>
                                        <?php echo str_replace('%20', ' ', ucfirst($productsInCart[$productItem['id']]['color'])); ?>
                                    <?php endif ?>
                                </td>
                                <td><?php echo Exchange::formatPrice($productsInCart[$productItem['id']]['price']) . ' грн.' ?></td>
                                <td><?php echo $productsInCart[$productItem['id']]['count']; ?></td>
                                <td><?php echo Exchange::formatPrice($productsInCart[$productItem['id']]['price'] * $productsInCart[$productItem['id']]['count']) . ' грн.'; ?></td>
                                <td><a href="/cart/delete/<?php echo $productItem['id']; ?>"><i
                                                class="far fa-times-circle"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="3">Итого</th>
                            <th colspan="2"><?php echo Exchange::formatPrice($totalPrice) . ' грн.'; ?></th>
                        </tr>
                    </table>

                    <a href="/cart/deleteall/">УДАЛИТЬ ВСЕ</a>

                    <div class="btn-more_yellow">
                        <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;" width="148"
                             height="54">
                            <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                        </svg>
                        <a href="/cart/checkout/">ОФОРМИТЬ ЗАКАЗ</a>
                    </div>

                <?php else: ?>
                    <p>В корзине нет ниодного товара</p>
                <?php endif; ?></div>
        </div>
    </div>
    </div>

<?php require(ROOT . '/views/layouts/footer.php'); ?>