<?php require(ROOT . '/views/layouts/header.php'); ?>

    <main>

        <div class="stroller">
            <div class="container">
                <div class="catalog-items">
                    <h1 id="strollers">
                        <?php echo $category['name']; ?>
                    </h1>

                    <?php foreach ($productList as $productItem): ?>
                        <?php include(ROOT . '/views/layouts/product-card.php'); ?>
                    <?php endforeach; ?>
                </div>

                <?php echo $pagination->get(); ?>

                <p class="category-description">
                    <?php echo $category['description'] ?><?php echo '<i class="fas fa-phone-volume"></i>:' . $commonData['phone1'] . '; <i class="fas fa-phone-volume"></i>:' . $commonData['phone2']; ?>
                </p>

            </div>
        </div>

    </main>

<?php require(ROOT . '/views/layouts/footer.php'); ?>