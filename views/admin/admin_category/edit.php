<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">
        <h2>Редактировать категорию: <?php echo $category['name'] ?></h2>

        <form enctype="multipart/form-data" action="#" method="POST">
            <p>
                <label for="name">Название</label>
                <input id="name" type="text" name="name" placeholder="" value="<?php echo $category['name'] ?>">
                <?php if (isset($errors['name'])): ?>
            <p class="errors"><?php echo $errors['name']; ?> </p>
            <?php endif; ?>
            </p>
            <p>
                <label for="description">Описание</label>
                <textarea id="description" name="description" cols="30"
                          rows="10"><?php echo $category['description'] ?></textarea>
            </p>
            <p>
                <label for="short_description">Короткое описание</label>
                <textarea id="short_description" name="short_description" cols="30"
                          rows="10"><?php echo $category['short_description'] ?></textarea>
            </p>
            <p>
                <label for="sort_order">Номер по порядку</label>
                <input id="sort_order" type="text" name="sort_order" placeholder=""
                       value="<?php echo $category['sort_order'] ?>">
                <?php if (isset($errors['sort_order'])): ?>
            <p class="errors"><?php echo $errors['sort_order']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                Фото<br>
                <?php if (is_file(ROOT . '/upload/images/category/' . $category['image'])): ?>
                    <img src="/upload/images/category/<?php echo $category['image']; ?>" alt=""><br>
                <?php else: ?>
                    <img src="/upload/images/category/no-image.png" alt=""><br>
                <?php endif; ?>
                <input type="file" name="userfile">
            </p>
            <p>
                <label for="status">Статус</label>
                <select id="status" name="status">
                    <?php if ($category['status'] == 1): ?>
                        <option selected value="1">Показывать</option>
                        <option value="0">Скрывать</option>
                    <?php elseif ($category['status'] == 0): ?>
                        <option value="1">Показывать</option>
                        <option selected value="0">Скрывать</option>
                    <?php endif ?>
                </select>
                <label for="is_recommended">Рекомендованный</label>
                <select id="is_recommended" name="is_recommended">
                    <?php if ($category['is_recommended'] == 1): ?>
                        <option selected value="1">Да</option>
                        <option value="0">Нет</option>
                    <?php elseif ($category['is_recommended'] == 0): ?>
                        <option value="1">Да</option>
                        <option selected value="0">Нет</option>
                    <?php endif ?>
                </select>
            </p>

            <input id="submit" type="submit" name="submit" value="ОБНОВИТЬ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>