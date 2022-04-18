<?php require(ROOT . '/views/layouts/header.php'); ?>

    <div class="register-form">
        <div class="container">
            <!--     <?php if (isset($result)): ?>
      <p>Вы зарегистрированы</p>
    <?php else: ?> -->
            <div class="wrapper">
                <h2>Вход в кабинет</h2>
                <form action="#" method="POST">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="e-mail" value="<?php echo $email ?>">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" name="password" placeholder="Пароль"
                           value="<?php echo $password ?>">
                    <input type="submit" id="submit" name="submit" value="Вход">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li>
                                    <?php echo $error; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="/user/register/">Регистрация</a>
                </form>

                <?php endif; ?>
            </div>
        </div>
    </div>

<?php require(ROOT . '/views/layouts/footer.php'); ?>