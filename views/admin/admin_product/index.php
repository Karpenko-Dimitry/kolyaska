<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
    <body>
    <div class="container">
        <h2>Список товаро</h2>
        <p><a href="/admin/product/create"><i class="fas fa-plus-circle"></i> Добавить товар</a></p>
        <table>
            <tr>
                <td>Имя</td>
                <td>Категория</td>
                <td>$</td>
                <td>Cтатус</td>
                <td>Ред</td>
                <td>Уд.</td>
            </tr>
            <?php foreach ($productList as $productItem): ?>
                <tr>
                    <td><a href="/products/<?php echo $productItem['url']; ?>/"
                           target="_blank"><?php echo $productItem['name']; ?></a></td>
                    <td><?php $category = CategoryModel::getCategoryById($productItem['category_id']);
                        echo $category['name']; ?></td>
                    <td><?php echo $productItem['price']; ?>$</td>
                    <?php if ($productItem['status'] == 0): ?>
                        <td style="color: red">Не актив</td>
                    <?php elseif ($productItem['status'] == 1): ?>
                        <td style="color: green">Актив</td>
                    <?php endif; ?>

                    <td><a href="/admin/product/edit/<?php echo $productItem['id']; ?>"><i class="fas fa-edit"></i></a>
                    </td>
                    <td><a href="/admin/product/delete/<?php echo $productItem['id']; ?>"><i
                                    class="fas fa-trash-alt"></i></i></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </body>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>