<?php require(ROOT . '/views/layouts/header.php'); ?>

<main>

    <div class="stroller">
        <div class="container">
            <div class="catalog-items">

                <?php if (!empty($searchResult)): ?>
                    <h1>
                        Список товаров по поиску "<?= $searchQuery; ?>"
                    </h1>
                    <?php foreach ($searchResult as $productItem): ?>
                        <?php include(ROOT . '/views/layouts/product-card.php'); ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h1>
                        Нет совпадений по запросу "<?= $searchQuery; ?>"
                    </h1>
                <?php endif; ?>
                <!--      </div>

      <?php /*echo $pagination->get(); */ ?>

    </div>-->
            </div>

</main>

<?php require(ROOT . '/views/layouts/footer.php'); ?>
