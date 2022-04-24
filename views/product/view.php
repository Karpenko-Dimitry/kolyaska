<?php require(ROOT . '/views/layouts/header.php'); ?>
<?php if (isset($productItem) && !empty($productItem)): ?>
    <main>
        <nav class="breadcrumbs">

            <div class="container">
                <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?= $commonData['dom']; ?>">
                            <span itemprop="name">Главная</span></a>
                        <meta itemprop="position" content="1"/>
                    </li>
                    ›
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <a itemscope itemtype="https://schema.org/WebPage"
                           itemprop="item"
                           itemid="<?= $commonData['dom'] . '/products/category/' . $category['url']; ?>"
                           href="<?= $commonData['dom'] . '/products/category/' . $category['url']; ?>">
                            <span itemprop="name"><?php echo $category['name']; ?></span></a>
                        <meta itemprop="position" content="2"/>
                    </li>
                    ›
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <span itemprop="name"><?php echo $productItem['name']; ?></span>
                        <meta itemprop="position" content="3"/>
                    </li>
                </ol>

            </div>

        </nav>

        <div class="good-details">
            <div class="container">
                <div class="details-item">
                    <div class="good-foto">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="350"
                             height="470">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="350" height="470" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-astra1)"/>
                            <defs>
                                <pattern id="carrello-astra1" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-astra_photo1"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <?php if (is_file(ROOT . '/upload/images/product/' . $productItem['image'])): ?>
                                    <image id="carrello-astra_photo1" x="-10" y="1" width="28%" height="28%"
                                           xlink:href="/upload/images/product/<?php echo $productItem['image']; ?>"/>
                                <?php else: ?>
                                    <image id="carrello-astra_photo1" x="-10" y="1" width="28%" height="28%"
                                           xlink:href="/upload/images/product/no-image.png"/>
                                <?php endif; ?>
                            </defs>
                        </svg>
                    </div>
                    <div class="colors">
                        <?php if ($attributeList): ?>
                            <?php foreach ($attributeList as $attributeItem): ?>
                                <a href="/upload/images/product/<?php if ($attributeItem['image']) {
                                    echo $attributeItem['image'];
                                } else {
                                    echo 'no-image.png';
                                } ?>" data-color="<?php echo $attributeItem['color_name'] ?>"
                                   style="background: <?php echo $attributeItem['color_code'] ?>"></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="details-item">
                    <div class="container">

                        <div class="title-item">
                            <h1>
                                <?php echo $productItem['type']; ?> в прокат <br> <?php echo $productItem['name']; ?>
                                <div class="color-name">

                                </div>
                            </h1>
                            <div class="good-code">
                                <div class="code">
                                    Артикул: <?php echo $productItem['code']; ?>
                                </div>
                                <?php if ($productItem['availability']): ?>
                                    <div class="in-out">
                                        В наличии
                                    </div>
                                <?php else: ?>
                                    <div class="in-out" style="color: red;">
                                        Нет в наличии
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="title-item">
                            <form action="">

                                <div class="title-price">
                                    <svg viewBox="0 0 138 56" preserveAspectRatio="none" width="160" height="54"
                                         style="display: block;">
                                        <path d="M5.000,-0.001 L133.000,3.999 C135.761,3.999 138.000,6.238 138.000,8.999 L134.000,50.999 C134.000,53.761 131.761,55.999 129.000,55.999 L5.000,55.999 C2.239,55.999 -0.000,53.761 -0.000,50.999 L-0.000,4.999 C-0.000,2.238 2.239,-0.001 5.000,-0.001 Z"></path>
                                    </svg>
                                    <p> <?php echo Exchange::exchangePrice($productItem['price']) . ' ' . $productItem['period']; ?></p>
                                </div>

                                <div class="btn-more_yellow">
                                    <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" width="160" height="54"
                                         style="display: block; fill: #fedb29;">
                                        <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                                    </svg>
                                    <a href="#" class="add-to-cart" data-color=""
                                       data-id="<?php echo $productItem['id']; ?>">В корзину</a>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="details-item">
                    <div class="good-description">
                        <p>
                            <?php echo $productItem['description1']; ?>
                        </p>
                    </div>
                </div>

                <div class="details-item">
                    <div class="good-description">
                        <table>
                            <?php foreach (explode("\r\n", $productItem['description2']) as $row) : ?>
                                <tr>
                                    <?php foreach (explode("_*_", $row) as $data) : ?>
                                        <td><?php echo $data; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php if ($corssProdList): ?>
                <h1 id="new-products">Популярные товары сервиса проката | КОЛЯСКА.УКР</h1>
            <?php endif; ?>
            <div class="catalog-items">
                <?php foreach ($corssProdList as $productItem): ?>
                    <?php include(ROOT . '/views/layouts/product-card.php'); ?>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
        <!--<div class="condition">
          <div class="container">

            <div class="row">

              <div class="condition-item">
                <div class="payment-icon">
                  <i class="fas fa-coins"></i>
                  <h4>Оплата</h4>
                </div>
                <div class="payment-description">
                  <h3>
                    Оплата за товар осуществляется следующими возможными способами:
                  </h3>
                  <ul>
                    <li>
                      Оплата наличными нашему курьеру при получении товара (только для г.Одесса);
                    </li>
                    <li>
                      Наложенный платеж через сервис доставки "Новая Почта;
                    </li>
                    <li>
                      Оплата при помощи сервисов "Безопасная cделка от OLX";
                    </li>
                    <li>
                      Оплата банковской картой Visa / Mastercard;
                    </li>
                    <li>
                      Оплата наличными при выборе способа доставки "Самовывоз из шоурума" во время заказа;
                    </li>
                  </ul>




                </div>
              </div>

              <div class="condition-item">
                <div class="delivery-icon">
                  <i class="fas fa-truck-loading"></i>
                  <h4>Доставка</h4>
                </div>
                <div class="delivery-description">
                  <p>
                    Доставка по г.Одесса осуществляется курьером по предварительной договоренности с нашим менеджером. Стоимость доставки оговаривается заранее.
                  </p>
                  <p>
                    Доставка по Украине осуществляется с помощью сервиса «Новая Почта».
                    В среднем, доставка занимает 1-3 дня, во время заказа наши менеджеры согласуют с Вами дату доставки перед отправкой товара.
                  </p>
                </div>
              </div>

              <div class="condition-item">
                <div class="return-icon">
                  <i class="fas fa-user-shield"></i>
                  <h4>Возврат</h4>
                </div>
                <div class="return-description">
                  <p>
                    Вы имеете право: проверить товар на наличие механических повреждений, примерять аксессуар, убедиться в полной работоспособности в отделении "Новой почты".
                  </p>

                  <p>
                    Если товар доставлен с браком, Вы можете написать заявление в отделении "Новой почты" о возврате товара, и его отправят обратно. Деньги за доставку не оплачиваете.
                  </p>
                </div>
              </div>

            </div>

          </div>
        </div>-->

    </main>

<?php endif; ?>
<?php require(ROOT . '/views/layouts/footer.php'); ?>