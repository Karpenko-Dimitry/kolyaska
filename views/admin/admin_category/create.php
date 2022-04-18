<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
<div class="container"><h2>Создать категорию</h2>

    <form enctype="multipart/form-data" action="#" method="POST">
        <p>
            <label for="name">Название</label>
            <input id="name" type="text" name="name" placeholder="">
            <?php if (isset($errors['name'])): ?>
        <p class="errors"><?php echo $errors['name']; ?> </p>
        <?php endif; ?>
        </p>
        <p>
            <label for="description">Описание</label>
            <textarea id="description" name="description" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="short_description">Короткое описание</label>
            <textarea id="short_description" name="short_description" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="sort_order">Номер по порядку</label>
            <input id="sort_order" type="text" name="sort_order" value="<?php echo $nextOrderNumber; ?>">
            <?php if (isset($errors['sort_order'])): ?>
        <p class="errors"><?php echo $errors['sort_order']; ?> </p>
    <?php endif; ?>
        </p>
        <p>
            <input type="file" name="userfile">
        </p>
        <p>
            <label for="status">Статус</label>
            <select id="status" name="status">
                <option selected value="1">Показывать</option>
                <option value="0">Скрывать</option>
            </select>
            <label for="is_recommended">Рекомендованный</label>
            <select id="is_recommended" name="is_recommended">
                <option value="1">Да</option>
                <option selected value="0">Нет</option>
            </select>
        </p>

        <input id="submit" type="submit" name="submit" value="ДОБАВИТЬ">
    </form>
</div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>

