<?php require_once(ROOT . '/views/layouts/admin_header.php'); ?>
<div class="container attribute">

    <form enctype="multipart/form-data" action="#" method="POST">

        <div class="wrapper">
            <label for="color_name">Название цвета</label>
            <input type="text" name="color_name" id="color_name">
        </div>

        <div class="wrapper">
            <label for="color_code">Код цвета</label>
            <input type="text" name="color_code" id="color_code">
        </div>

        <div class="wrapper">
            <label for="status"></label>
            <select name="status" id="status">
                <option value="1" selected>Показывать</option>
                <option value="0">Скрывать</option>
            </select>
        </div>

        <div class="wrapper">
            <label for="userfile"></label>
            <input type="file" name="userfile" id="userfile">
        </div>

        <input id="submit" type="submit" name="submit" value="ДОБАВИТЬ">

    </form>
    <?php if ($attributeListByProduct): ?>
        <table>
            <tr>
                <td colspan="2">Цвет</td>
                <td>Фото</td>
                <td>Редакт.</td>
                <td>Удал.</td>
            </tr>
            <?php foreach ($attributeListByProduct as $attribute): ?>
                <tr>
                    <td><?php echo $attribute['color_name']; ?></td>
                    <td style="background-color: <?php echo $attribute['color_code']; ?>"></td>
                    <td>
                        <?php if (is_file(ROOT . '/upload/images/product/' . $attribute['image'])): ?>
                            <img src="/upload/images/product/<?php echo $attribute['image']; ?>" alt=""><br>
                        <?php else: ?>
                            <img src="/upload/images/product/no-image.png" alt=""><br>
                        <?php endif; ?>
                    </td>
                    <td><a href="/admin/attribute/edit/<?php echo $attribute['id']; ?>"><i
                                    class="fas fa-edit"></i></a></a></td>
                    <td><a href="/admin/attribute/delete/<?php echo $attribute['id']; ?>"><i
                                    class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<?php require_once(ROOT . '/views/layouts/admin_footer.php'); ?>
