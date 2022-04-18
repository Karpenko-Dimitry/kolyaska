<?php include(ROOT . '/views/layouts/header.php') ?>

    <div class="checkout">
        <div class="container">
            <div class="wrapper">
                <?php if ($result): ?>
                    <p>Заказ оформлен. <br> Мы вам перезвоним</p>
                <?php else: ?>


                    <p>Вы выбрали: <?php echo $totalQuantity; ?> товар(ов ) на сумму: <?php echo "$totalPrice"; ?>
                        грн.</p>

                    <form action="#" method="POST">

                        <div class="checkout-name">
                            <label for="name">Введите имя </label>
                            <input type="text" name="name" id="name" placeholder="Иван"
                                   value="<?php echo $userName; ?>">
                            <div class="error-name">
                                <?php if (isset($errors['name']) && is_array($errors)): ?>
                                    <?php echo $errors['name']; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="checkout-phone">
                            <label for="userPhone">Ввеедите телефон</label>
                            <input type="text" name="userPhone" id="userPhone" placeholder="Номер телефона"
                                   value="<?php echo $userPhone; ?>">
                            <div class="error-phone">
                                <?php if (isset($errors['phone']) && is_array($errors)): ?>
                                    <?php echo $errors['phone']; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <label for="userComment">Ввеедите комментарий </label>
                        <textarea name="userComment" id="userComment" cols="30" rows="10"></textarea>
                        <input type="submit" name="submit" id="submit" value="Оформить заказ">

                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php include(ROOT . '/views/layouts/footer.php') ?>