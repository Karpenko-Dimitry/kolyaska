<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

<div class="container">
    <form enctype="multipart/form-data" action="#" method="POST">

        <div class="wrapper">
            <label for="color_name">Название цвета</label>
            <input type="text" name="color_name" id="color_name" value="<?php echo $attribute['color_name'] ?>">
        </div>

        <div class="wrapper">
            <label for="color_code">Код цвета</label>
            <input type="text" name="color_code" id="color_code" value="<?php echo $attribute['color_code'] ?>">
        </div>

        <div class="wrapper">
            <label for="status"></label>
            <select name="status" id="status">
                <?php if ($attribute['status'] == 1): ?>
                    <option value="1" selected>Показывать</option>
                    <option value="0">Скрывать</option>
                <?php elseif ($attribute['status'] == 0): ?>
                    <option value="1">Показывать</option>
                    <option value="0" selected>Скрывать</option>
                <?php endif; ?>
            </select>
        </div>

        <div class="wrapper">
            <img src="/upload/images/product/<?php echo $attribute['image'] ?>" alt="">
            <label for="userfile">Фото</label>
            <input type="file" name="userfile" id="userfile">
        </div>

        <input id="submit" type="submit" name="submit" value="ОБНОВИТЬ">

    </form>
</div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>

