<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
    <body>

    <div class="container">
        <h2>Список категорий</h2>
        <p><a href="/admin/category/create"><i class="fas fa-plus-circle"></i> Добавить категорию</a></p>
        <table>
            <tr>
                <td>Имя</td>
                <td>№ по поряд</td>
                <td>Реком. к показу <br> на главной странице</td>
                <td>Статус</td>
                <td>Редакт</td>
                <td>Уд</td>
            </tr>
            <?php foreach ($categoryList as $categoryItem): ?>
                <tr>
                    <td><a href="/products/category/<?php echo $categoryItem['url']; ?>/"
                           target="_blank"><?php echo $categoryItem['name']; ?></a></td>
                    <td><?php echo $categoryItem['sort_order']; ?></td>

                    <?php if ($categoryItem['is_recommended'] == 0): ?>
                        <td style="color: red">Нет</td>
                    <?php elseif ($categoryItem['is_recommended'] == 1): ?>
                        <td style="color: green">Да</td>
                    <?php endif; ?>

                    <?php if ($categoryItem['status'] == 0): ?>
                        <td style="color: red">Не актив</td>
                    <?php elseif ($categoryItem['status'] == 1): ?>
                        <td style="color: green">Актив</td>
                    <?php endif; ?>
                    <td><a href="/admin/category/edit/<?php echo $categoryItem['id']; ?>"><i
                                    class="fas fa-edit"></i></a></td>
                    <td><a href="/admin/category/delete/<?php echo $categoryItem['id']; ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    </body>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>