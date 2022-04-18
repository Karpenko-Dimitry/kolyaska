<?php require(ROOT . '/views/layouts/header.php'); ?>
    <div class="register-form">
        <div class="container">
            <?php if ($result): ?>
                <p>Вы зарегистрированы</p>
            <?php else: ?>
                <form action="#" method="POST">
                    <label for="name">Имя</label>
                    <input id="name" type="text" name="name" placeholder="Имя" value="<?php echo $name ?>">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="e-mail" value="<?php echo $email ?>">
                    <label for="password">Пароль</label>
                    <input id="password" type="text" name="password" placeholder="Пароль"
                           value="<?php echo $password ?>">
                    <input id="submit" type="submit" name="submit" value="Регистрация">

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