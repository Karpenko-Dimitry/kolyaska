<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
    <body>
    <div class="container">
        <h2>Список товаро</h2>

        <table>
            <tr>
                <td>Id</td>
                <td>Имя</td>
                <td>Категория</td>
                <td>Cтатус</td>
                <td>Цвет</td>
            </tr>
            <?php foreach ($productList as $productItem): ?>
                <tr>
                    <td><?php echo $productItem['id']; ?></td>
                    <td><a href="/products/<?php echo $productItem['url']; ?>/"
                           target="_blank"><?php echo $productItem['name']; ?></a></td>
                    <td><?php $category = CategoryModel::getCategoryById($productItem['category_id']);
                        echo $category['name']; ?></td>
                    <?php if ($productItem['status'] == 0): ?>
                        <td style="color: red">Не активен</td>
                    <?php elseif ($productItem['status'] == 1): ?>
                        <td style="color: green">Активен</td>
                    <?php endif; ?>

                    <td><a href="/admin/attribute/create/product-<?php echo $productItem['id']; ?>/"><i
                                    class="fas fa-plus-circle"></i></a></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </body>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>