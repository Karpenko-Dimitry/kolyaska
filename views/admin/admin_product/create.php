<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>

    <div class="container">
        <h2>Добавить новый товар</h2>

        <form enctype="multipart/form-data" action="#" method="POST">
            <p>
                <label for="type">Тип</label>
                <input id="type" type="text" name="type" placeholder="Прогулочная коляска">
            </p>
            <p>
                <label for="name">Название</label>
                <input id="name" type="text" name="name" placeholder="Carrello Eclipse">
                <?php if (isset($errors['name'])): ?>
            <p class="errors"><?php echo $errors['name']; ?> </p>
            <?php endif; ?>
            </p>
            <p>
                <label for="category_id">Категория</label>
                <select id="category_id" name="category_id">
                    <?php foreach ($categoryList as $categoryItem): ?>
                        <option value="<?php echo $categoryItem['id'] ?>"><?php echo $categoryItem['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <label for="code">Артикул</label>
                <input id="code" type="text" name="code" placeholder="CRL-12001">
            </p>
            <p>
                <label for="price">Цена текущая</label>
                <input id="price" type="text" name="price" placeholder="3000">
                <?php if (isset($errors['price'])): ?>
            <p class="errors"><?php echo $errors['price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                <label for="period">Период</label>
                <select name="period" id="period">
                    <option value="грн./мес." selected>грн./мес.</option>
                    <option value="грн./сутк.">грн./сутк.</option>
                </select>
                <?php if (isset($errors['price'])): ?>
            <p class="errors"><?php echo $errors['price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                <label for="presale_price">Цена до применения скидки</label>
                <input id="presale_price" type="text" name="presale_price" placeholder="3000">
                <?php if (isset($errors['presale_price'])): ?>
            <p class="errors"><?php echo $errors['presale_price']; ?> </p>
        <?php endif; ?>
            </p>
            <p>
                <markdown-toolbar for="desc1">
                    <md-bold class="btn btn-sm"><i class="fas fa-bold"></i></md-bold>
                    <md-header level="2" class="btn btn-sm"><i class="fas fa-heading"></i></md-header>
                    <md-italic class="btn btn-sm"><i class="fas fa-italic"></i></md-italic>
                    <md-unordered-list class="btn btn-sm"><i class="fas fa-list"></i></md-unordered-list>
                    <md-ordered-list class="btn btn-sm"><i class="fas fa-list-ol"></i></md-ordered-list>
                    <md-image class="btn btn-sm">image</md-image>
                    <md-link class="btn btn-sm"><i class="fas fa-link"></i></md-link>
                </markdown-toolbar>
                <textarea name="description1" cols="30" rows="10" class="mt-3 width-full" id="desc1"></textarea>
            </p>
            <p>
                <label for="description2">Описание2 (таблица тех.характеристик)</label>
                <textarea id="description2" name="description2" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="short_description">Короткое описание сниппет</label>
                <textarea id="short_description" name="short_description" cols="30" rows="10"></textarea>
            </p>
            <p>
                Фото
                <input type="file" name="userfile">
            </p>
            <p>
                <label for="availability">В наличии</label>
                <select id="availability" name="availability">
                    <option selected value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
                <label for="is_new">Новый</label>
                <select id="is_new" name="is_new">
                    <option value="1">Да</option>
                    <option selected value="0">Нет</option>
                </select>
                <label for="is_sale">Распродажа</label>
                <select id="is_sale" name="is_sale">
                    <option value="1">Да</option>
                    <option selected value="0">Нет</option>
                </select>
                <label for="is_recommended">Рекомендованный</label>
                <select id="is_recommended" name="is_recommended">
                    <option value="1">Да</option>
                    <option selected value="0">Нет</option>
                </select>
                <label for="status">Статус</label>
                <select id="status" name="status">
                    <option selected value="1">Показывать</option>
                    <option value="0">Скрывать</option>
                </select>
            </p>
            <input id="submit" type="submit" name="submit" value="ДОБАВИТЬ">
        </form>
    </div>

<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>
<script src="../../../../node_modules/@github/markdown-toolbar-element/dist/index.js" type="module"></script>

