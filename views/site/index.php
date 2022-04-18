<?php require(ROOT . '/views/layouts/header.php'); ?>

    <!-- .slider>.container>.slider-left+.slider-right -->


    <div class="slider">

        <!-- slider #1 -->
        <?php foreach ($categoryList as $categoryItem): ?>
            <?php $LastNewProduct = ProductModel::LastNewProductInCategory($categoryItem['id']); ?>
            <?php $LastThreeProduct = ProductModel::LastThreeProductInCategory($categoryItem['id']); ?>
            <?php if ($LastNewProduct): ?>
                <div class="container">
                    <div class="slider-left animated zoomInUp">
                        <svg viewBox="0 0 793 340" preserveAspectRatio="none" style="display: block;" width="798"
                             height="350">
                            <path d="M10.000,-0.000 L783.000,20.000 C788.523,20.000 793.000,24.477 793.000,30.000 L753.000,320.000 C753.000,325.523 748.523,330.000 743.000,330.000 L50.000,340.000 C44.477,340.000 40.000,335.522 40.000,330.000 L-0.000,10.000 C-0.000,4.477 4.477,-0.000 10.000,-0.000 Z"></path>
                        </svg>
                        <div class="col-left">
                            <h2><?php echo $categoryItem['name']; ?></h2>
                            <ul>
                                <?php if ($LastThreeProduct): ?>
                                    <?php foreach ($LastThreeProduct as $threeProduct): ?>
                                        <li>
                                            <a href="/products/<?php echo $threeProduct['url']; ?>/"><?php echo $threeProduct['name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                            <div class="btn-more">
                                <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                     width="148" height="54">
                                    <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                                </svg>
                                <a href="/products/category/<?php echo $categoryItem['url']; ?>/">подробнее</a>
                            </div>
                        </div>
                        <div class="col-right">
                            <a href="/products/category/<?php echo $categoryItem['url']; ?>/">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="308" height="224"
                                     viewBox="0 0 308 224" fill="none">
                                    <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                          fill="url(#col-right<?php echo $categoryItem['url']; ?>)"/>
                                    <defs>
                                        <pattern id="col-right<?php echo $categoryItem['url']; ?>"
                                                 patternContentUnits="objectBoundingBox"
                                                 width="1" height="1">
                                            <use xlink:href="#image<?php echo $categoryItem['url']; ?>"
                                                 transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                        </pattern>
                                        <?php if (is_file(ROOT . '/upload/images/category/' . $categoryItem['image'])): ?>
                                            <image id="image<?php echo $categoryItem['url']; ?>" x="-10" y="2"
                                                   width="26%" height="26%"
                                                   xlink:href="/upload/images/category/<?php echo $categoryItem['image']; ?>"/>
                                        <?php else: ?>
                                            <image id="image<?php echo $categoryItem['url']; ?>" x="-10" y="2"
                                                   width="26%" height="26%"
                                                   xlink:href="/upload/images/category/no-image.png"/>
                                        <?php endif; ?>
                                    </defs>
                                </svg>

                                <div class="price-from">
                                    <svg viewBox="0 0 171 66" style="display: block;" width="174" height="66">
                                        <path d="M16.000,-0.000 L161.000,10.000 C166.523,10.000 171.000,14.477 171.000,20.000 L165.000,56.000 C165.000,61.522 160.523,66.000 155.000,66.000 L10.000,66.000 C4.477,66.000 -0.000,61.522 -0.000,56.000 L6.000,10.000 C6.000,4.477 10.477,-0.000 16.000,-0.000 Z"></path>
                                    </svg>
                                    <span>от <?php $minPriceinCat = ProductModel::minPriceByCategory($categoryItem['id']);
                                        echo Exchange::exchangePrice($minPriceinCat); ?> грн./мес.</span>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="slider-right animated zoomInUp">

                        <svg viewBox="0 0 357 340" preserveAspectRatio="none" style="display: block;" width="362"
                             height="350">
                            <path d="M50.000,20.000 L317.000,-0.000 C322.523,-0.000 327.000,4.477 327.000,10.000 L357.000,330.000 C357.000,335.522 352.523,340.000 347.000,340.000 L10.000,330.000 C4.477,330.000 -0.000,325.523 -0.000,320.000 L40.000,30.000 C40.000,24.477 44.477,20.000 50.000,20.000 Z"></path>
                        </svg>

                        <div class="best-seller">
                            <a href="/products/<?php echo $LastNewProduct['url']; ?>/">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="100%" height="224" viewBox="0 0 308 224" fill="none">
                                    <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                          fill="url(#best-seller<?php echo $LastNewProduct['url']; ?>)"/>
                                    <defs>
                                        <pattern id="best-seller<?php echo $LastNewProduct['url']; ?>"
                                                 patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image<?php echo $LastNewProduct['url']; ?>"
                                                 transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                        </pattern>
                                        <?php if (is_file(ROOT . '/upload/images/product/' . $LastNewProduct['image'])): ?>
                                            <image id="image<?php echo $LastNewProduct['url']; ?>" x="-10" y="2"
                                                   width="26%" height="26%"
                                                   xlink:href="/upload/images/product/<?php echo $LastNewProduct['image']; ?>"/>
                                        <?php else: ?>
                                            <image id="image<?php echo $LastNewProduct['url']; ?>" x="-10" y="2"
                                                   width="26%" height="26%"
                                                   xlink:href="/upload/images/product/no-image.png"/>
                                        <?php endif; ?>
                                    </defs>
                                </svg>

                                <div class="label new right">
                                    <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;"
                                         width="44" height="27">
                                        <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                                    </svg>
                                    <span>новинка</span>
                                </div>
                                <div class="price">
                                    <svg viewBox="0 0 70 36" preserveAspectRatio="none" style="display: block;"
                                         width="91" height="36">
                                        <path d="M5.000,-0.000 L65.000,6.000 C67.761,6.000 70.000,8.239 70.000,11.000 L64.000,31.000 C64.000,33.761 61.761,36.000 59.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                                    </svg>
                                    <span><?php echo Exchange::exchangePrice($LastNewProduct['price']) . ' ' . $LastNewProduct['period']; ?></span>
                                </div>
                            </a>

                            <div class="description">
                                <h2><?php echo $LastNewProduct['type']; ?> <br> <?php echo $LastNewProduct['name']; ?>
                                </h2>
                            </div>
                            <div class="btn-more">
                                <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                     width="148" height="54">
                                    <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                                </svg>
                                <a href="/products/<?php echo $LastNewProduct['url']; ?>/">подробнее</a>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>


        <div class="slider-nav">
        </div>


    </div>

    <div class="container">
        <?php if ($newProducts): ?>
            <h1 id="new-products">Новинки проката детских товаров</h1>
        <?php endif; ?>
        <div class="catalog-items">
            <?php foreach ($newProducts as $productItem): ?>
                <?php include(ROOT . '/views/layouts/product-card.php'); ?>
            <?php endforeach; ?>
        </div>
    </div>
    </div>


    <!-- Акции -->

    <div id="promo" class="stock">
        <div class="container">
            <div class="col-nav">
                <svg viewBox="0 0 263 345" preserveAspectRatio="none" style="display: block;" width="293" height="333">
                    <path d="M10.000,10.000 L253.000,-0.000 C258.523,-0.000 263.000,4.477 263.000,10.000 L263.000,335.000 C263.000,340.523 258.523,345.000 253.000,345.000 L10.000,335.000 C4.477,335.000 -0.000,330.523 -0.000,325.000 L-0.000,20.000 C-0.000,14.477 4.477,10.000 10.000,10.000 Z"></path>
                </svg>
                <div class="stock-nav">
                    <h2>
                        Акции <br>
                        Скидки
                    </h2>
                    <ul>
                        <li>
                            <a href="#folowers">Cкидки подписчикам</a>
                        </li>
                        <li>
                            <a href="#sale">Сезонные скидки</a>
                        </li>
                        <!--          <li>-->
                        <!--            <a href="#sale">Распродажа</a>-->
                        <!--          </li>-->
                    </ul>
                </div>


            </div>
            <div id="folowers" class="col-description">
                <h2>
                    Cкидки <br> подписчикам инстаграм
                </h2>
                <p>
                    Нам радостно видеть вас в рядах наших клиентов, и мы хотим вас поблагодорить, подарив приятные
                    бонусы. Поэтому дарим всем нашим фоловерам в инстаграм скидки. При соблюдении всех условий, мы
                    возвращаем вам бонус в виде <span class="orange bold">Cash-Back 50 грн.</span>:
                <ol>
                    <li>
                        вы подписаны на нашу страничку в инстаграм;
                    </li>
                    <li>
                        постите в своем аккаунте в инстаграм фото арендованого вами товара;
                    </li>
                    <li>
                        отмечаете в посте двух своих друзей
                    </li>
                </ol>

                <div class="btn-more_yellow">
                    <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;" width="148"
                         height="54">
                        <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                    </svg>
                    <a href="https://www.instagram.com/prokat.ukr/" target="_blank">подписаться</a>
                </div>
                </p>
            </div>

            <!-- Распродажа -->
            <?php if ($saleProducts): ?>
                <h2 id="sale">Взять в прокат со скидкой</h2>
            <?php endif; ?>

            <div class="catalog-items">
                <?php foreach ($saleProducts as $productItem): ?>
                    <?php include(ROOT . '/views/layouts/product-card.php'); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="partners" class="partners stock">
        <div class="container">
            <div class="col-nav">
                <svg viewBox="0 0 263 345" preserveAspectRatio="none" style="display: block;" width="293" height="333">
                    <path d="M10.000,10.000 L253.000,-0.000 C258.523,-0.000 263.000,4.477 263.000,10.000 L263.000,335.000 C263.000,340.523 258.523,345.000 253.000,345.000 L10.000,335.000 C4.477,335.000 -0.000,330.523 -0.000,325.000 L-0.000,20.000 C-0.000,14.477 4.477,10.000 10.000,10.000 Z"></path>
                </svg>
                <div class="stock-nav">
                    <h2>
                        Полезные <br>
                        Партнеры
                    </h2>
                    <ul>
                        <li>
                            <a href="https://прокат.укр/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%d0%ba%d0%be%d0%bb%d1%8f%d1%81%d0%ba%d0%b8/"
                               target="_blank">Прокат колясок</a>
                        </li>
                        <li>
                            <a href="https://xn--80atldfp.xn--j1amh/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%D0%BC%D0%B0%D0%BD%D0%B5%D0%B6-%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D0%BA%D0%B0/"
                               target="_blank">Прокат манежей</a>
                        </li>
                        <li>
                            <a href="https://xn--80atldfp.xn--j1amh/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%D1%83%D0%BA%D0%B0%D1%87%D0%B8%D0%B2%D0%B0%D1%8E%D1%89%D0%B8%D0%B5-%D1%86%D0%B5%D0%BD%D1%82%D1%80%D1%8B/"
                               target="_blank">Прокат укачивающих центров </a>
                        </li>
                        <li>
                            <a href="https://прокат.укр/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%d0%b4%d0%b5%d1%82%d1%81%d0%ba%d0%b8%d0%b5-%d0%b0%d0%b2%d1%82%d0%be%d0%ba%d1%80%d0%b5%d1%81%d0%bb%d0%b0/"
                               target="_blank">Прокат автокресел </a>
                        </li>
                        <li>
                            <a href="https://прокат.укр/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%d1%81%d1%82%d1%83%d0%bb%d1%8c%d1%87%d0%b8%d0%ba%d0%b8-%d0%b4%d0%bb%d1%8f-%d0%ba%d0%be%d1%80%d0%bc%d0%bb%d0%b5%d0%bd%d0%b8%d1%8f/"
                               target="_blank">Прокат стульчиков для кормления </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-description">
                <h2>
                    Не уверен в покупке <br> попробуй на прокат
                </h2>

                <p>
                    Рады предложить Вам новый вид услуги – прокат детских товаров (г. Одесса) от компании ПРОКАТ.УКР.
                </p>
                <p>
                    Теперь не нужно большую часть бюджета тратить на бесполезные товары. Вы можете попробовать взять
                    товар в прокат и убедиться в целесообразности и полезности покупки.
                </p>
                <p>
                    С другой стороны, существует масса товаров (детские весы, ходунки, укачивающие центры и др.),
                    которые нужны ребенку 2-3 месяца, а стоимость этих гаджетов высока, поэтому рациональнее взять во
                    временное пользование.
                </p>
                <p>
                    Будь рациональным и экологичным – бери в <a href="https://прокат.укр/"
                                                                target="_blank">ПРОКАТ.УКР</a>
                </p>

            </div>
        </div>

        <div id="catalog" class="catalog">
            <div class="container">
                <h2>Каталог продукции</h2>


                <div class="catalog-items">
                    <?php foreach ($recommendedCategories

                    as $recommendedCategory): ?>
                    <a href="/products/category/<?php echo $recommendedCategory['url'] ?>/">
                        <div class="col4">
                            <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                                 height="235">
                                <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                            </svg>
                            <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224"
                                 viewBox="0 0 308 224" fill="none">
                                <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                      fill="url(#catalog-stroller<?php echo $recommendedCategory['id'] ?>)"/>
                                <defs>
                                    <pattern id="catalog-stroller<?php echo $recommendedCategory['id'] ?>"
                                             patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#stroller<?php echo $recommendedCategory['id'] ?>"
                                             transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                    </pattern>
                                    <?php if (is_file(ROOT . '/upload/images/category/' . $recommendedCategory['image'])): ?>
                                        <image id="stroller<?php echo $recommendedCategory['id'] ?>" x="-10" y="2"
                                               width="26%" height="26%"
                                               xlink:href="/upload/images/category/<?php echo $recommendedCategory['image'] ?>"/>
                                    <?php else: ?>
                                        <image id="stroller<?php echo $recommendedCategory['id'] ?>" x="-10" y="2"
                                               width="26%" height="26%"
                                               xlink:href="/upload/images/category/no-image.png"/>
                                    <?php endif ?>

                                </defs>
                            </svg>
                            <div class="goods-price">
                                <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                     height="36">
                                    <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                                </svg>
                                <div class="value">
                                    от <?php $minPriceinCat = ProductModel::minPriceByCategory($recommendedCategory['id']);
                                    echo Exchange::exchangePrice($minPriceinCat); ?> грн./мес.
                                </div>
                            </div>
                    </a>
                    <h2>
                        <?php echo $recommendedCategory['name'] ?> в ассортименте
                    </h2>

                    <div class="btn-more_yellow">
                        <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;" width="148"
                             height="54">
                            <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                        </svg>
                        <a href="/products/category/<?php echo $recommendedCategory['url'] ?>/">подробнее</a>
                    </div>
                </div>


                <?php endforeach; ?>
            </div>
        </div>
    </div>


<?php require(ROOT . '/views/layouts/footer.php'); ?>