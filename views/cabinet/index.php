<?php require(ROOT . '/views/layouts/header.php'); ?>

    <div class="cabinet">
        <div class="container">
            <h2>Кабинет пользователя</h2>
            <h3>Привет, <?php echo $user['name']; ?></h3>
            <ul>
                <li><a href="/cabinet/edit/">Редактировать данные</a></li>
                <li><a href="/cabinet/history/">Список покупок</a></li>
                <?php if ($user['role'] == 'admin'): ?>
                    <li><a href="/admin/">Админ панель</a></li>
                <?php endif; ?>
                <li><a href="/user/logout/">Выход</a></li>

            </ul>
        </div>
    </div>


<?php require(ROOT . '/views/layouts/footer.php'); ?>