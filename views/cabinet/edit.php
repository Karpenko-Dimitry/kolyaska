<?php require(ROOT . '/views/layouts/header.php'); ?>
    <div class="register-form">
        <div class="container">
            <?php if ($result): ?>
                <p>Данные отредактированы</p>
            <?php else: ?>
                <h2>Редактировать данные</h2>
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name ?>">
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password ?>">
                    <input id="submit" type="submit" name="submit" value="Редактировать">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li>
                                    <?php echo $error; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </form>
            <?php endif; ?>
        </div>
    </div>
<?php require(ROOT . '/views/layouts/footer.php'); ?>