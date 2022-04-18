<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">

        <h2>Редактировать товар: <?php echo $product['type'] . ' ' . $product['name'] ?></h2>

        <form enctype="multipart/form-data" action="#" method="POST">
            <p>
                Тип
                <input type="text" name="type" placeholder="Прогулочная коляска" value="<?php echo $product['type'] ?>">
            </p>
            <p>
                Название
                <input type="text" name="name" placeholder="Carrello Eclipse" value="<?php echo $product['name'] ?>">
                <?php if (isset($errors['name'])): ?>
            <p class="errors"><?php echo $errors['name']; ?> </p>
            <?php endif; ?>
            </p>
            <p>
                Категория
                <select name="category_id" id="" value="<?php echo $product['category_id'] ?>">
                    <?php foreach ($categoryList as $categoryItem): ?>
                        <?php if ($product['category_id'] == $categoryItem['id']): ?>
                            <option selected
                                    value="<?php echo $categoryItem['id'] ?>"><?php echo $categoryItem['name'] ?></option>
                        <?php else: ?>
                            <option value="<?php echo $categoryItem['id'] ?>"><?php echo $categoryItem['name'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                Артикул
                <input type="text" name="code" placeholder="CRL-12001" value="<?php echo $product['code'] ?>">
            </p>
            <p>
                Цена текущая
                <input type="text" name="price" placeholder="3000" value="<?php echo $product['price'] ?>">
                <?php if (isset($errors['price'])): ?>
            <p class="errors"><?php echo $errors['price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                Цена до применения скидки
                <input type="text" name="presale_price" placeholder="3000"
                       value="<?php echo $product['presale_price'] ?>">
                <?php if (isset($errors['presale_price'])): ?>
            <p class="errors"><?php echo $errors['presale_price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                <label for="period">Период</label>
                <select name="period" id="period">
                    <?php if ($product['period'] == 'грн./сутк.'): ?>
                        <option value="грн./мес.">грн./мес.</option>
                        <option value="грн./сутк." selected>грн./сутк.</option>
                    <?php else: ?>
                        <option value="грн./мес." selected>грн./мес.</option>
                        <option value="грн./сутк.">грн./сутк.</option>
                    <?php endif; ?>

                </select>
                <?php if (isset($errors['price'])): ?>
            <p class="errors"><?php echo $errors['price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                <label for="">Описание1</label>
                <textarea name="description1" cols="30" rows="10"><?php echo $product['description1'] ?></textarea>
            </p>
            <p>
                <label for="">Описание2 (таблица тех.характеристик)</label>
                <textarea name="description2" cols="30" rows="10"><?php echo $product['description2'] ?></textarea>
            </p>
            <p>
                <label for="">Короткое описание сниппет</label>
                <textarea name="short_description" cols="30"
                          rows="10"><?php echo $product['short_description'] ?></textarea>
            </p>
            <p>
                Фото<br>
                <?php if (is_file(ROOT . '/upload/images/product/' . $product['image'])): ?>
                    <img src="/upload/images/product/<?php echo $product['image']; ?>" alt=""><br>
                <?php else: ?>
                    <img src="/upload/images/product/no-image.png" alt=""><br>
                <?php endif; ?>
                <input type="file" name="userfile">
            </p>
            <p>
                В наличии
                <select name="availability">
                    <?php if ($product['availability'] == 1): ?>
                        <option selected value="1">Да</option>
                        <option value="0">Нет</option>
                    <?php elseif ($product['availability'] == 0): ?>
                        <option value="1">Да</option>
                        <option selected value="0">Нет</option>
                    <?php endif ?>
                </select>
                Новый
                <select name="is_new">
                    <?php if ($product['is_new'] == 1): ?>
                        <option selected value="1">Да</option>
                        <option value="0">Нет</option>
                    <?php elseif ($product['is_new'] == 0): ?>
                        <option value="1">Да</option>
                        <option selected value="0">Нет</option>
                    <?php endif ?>
                </select>
                Рекомендованный
                <select name="is_recommended">
                    <?php if ($product['is_recommended'] == 1): ?>
                        <option selected value="1">Да</option>
                        <option value="0">Нет</option>
                    <?php elseif ($product['is_recommended'] == 0): ?>
                        <option value="1">Да</option>
                        <option selected value="0">Нет</option>
                    <?php endif ?>
                </select>
                Статус
                <select name="status">
                    <?php if ($product['status'] == 1): ?>
                        <option selected value="1">Показывать</option>
                        <option value="0">Скрывать</option>
                    <?php elseif ($product['status'] == 0): ?>
                        <option value="1">Показывать</option>
                        <option selected value="0">Скрывать</option>
                    <?php endif ?>
                </select>
            </p>

            <input id="submit" type="submit" name="submit" value="ОБНОВИТЬ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>