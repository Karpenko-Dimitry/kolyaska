<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162603289-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-162603289-1');
    </script>

    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1.0">

    <meta name="geo.placename" content="Одеcса, Одесcкая область, Украина, 65038"/>
    <meta name="geo.position" content="46.3885779;30.7403153"/>
    <meta name="geo.region" content="UA-Одесская область"/>
    <meta name="ICBM" content="46.3885779, 30.7403153"/>

    <?php if (isset($productItem)): ?>

        <title>ᐉ Прокат <?php echo $productItem['name'] . ' ' . $productItem['type']; ?> в г. Одесса</title>
        <meta name="description"
              content="✅ <?php echo $productItem['short_description']; ?> ☎<?php echo $commonData['phone1'] ?>">

        <meta property="og:type" content="product"/>
        <meta property="og:locale" content="ru-UA"/>
        <meta property="og:site_name" content="<?php echo $commonData['site_name']; ?>"/>
        <meta property="og:title" content="ᐉ Прокат <?php echo $productItem['name'] . ' в Одессе ☎' . $commonData['phone1']; ?>"/>
        <meta property="og:description"
              content="✅ <?php echo $productItem['short_description']; ?> ☎<?php echo $commonData['phone1'] ?>"/>
        <meta property="og:url" content="<?php echo $commonData['dom'] . $_SERVER['REQUEST_URI']; ?>"/>
        <meta property="og:image"
              content="<?php echo $commonData['dom'] . '/upload/images/product/' . $productItem['image']; ?>"/>
        <meta property="og:price:amount"
              content="<?php echo Exchange::exchangePriceNoformat($productItem['price']); ?>"/>
        <meta property="og:price:currency" content="UAH"/>
    <?php elseif (isset($category)): ?>
        <title>ᐉ <?php echo $category['name'] ?> от <?= $minUahPriceinCat ?> грн.
            ☎<?php echo $commonData['phone1'] ?></title>
        <meta name="description"
              content="✅ <?php echo $category['short_description'] ?> ☎<?php echo $commonData['phone1'] ?>">
        <meta property="og:type" content="website"/>
        <meta property="og:locale" content="ru-UA"/>
        <meta property="og:site_name" content="<?php echo $commonData['site_name']; ?>"/>
        <meta property="og:title"
              content="ᐉ <?php echo $category['name'] ?> от <?= $minUahPriceinCat ?> грн. в Одессе ☎<?php echo $commonData['phone1'] ?>"/>
        <meta property="og:description"
              content="✅ <?php echo $category['short_description'] ?> ☎<?php echo $commonData['phone1'] ?>"/>
        <meta property="og:url" content="<?php echo $commonData['dom'] . $_SERVER['REQUEST_URI']; ?>"/>
        <meta property="og:image"
              content="<?php echo $commonData['dom'] . '/upload/images/category/' . $category['image']; ?>"/>
    <?php else: ?>

        <title>ᐉ <?php echo $title; ?></title>
        <meta name="description" content="✅ <?php echo $description; ?> ☎<?php echo $commonData['phone1'] ?>">

        <meta property="og:type" content="website"/>
        <meta property="og:locale" content="ru-UA"/>
        <meta property="og:site_name" content="<?php echo $commonData['site_name']; ?>"/>
        <meta property="og:title" content="ᐉ <?php echo $title; ?>"/>
        <meta property="og:description" content="✅ <?php echo $description; ?> ☎<?php echo $commonData['phone1'] ?>"/>
        <meta property="og:url" content="<?php echo $commonData['dom'] . $_SERVER['REQUEST_URI']; ?>"/>
        <meta property="og:image" content="<?php echo $commonData['dom'] . '/upload/images/logo.png'; ?>"/>

    <?php endif; ?>

    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="shortcut icon" href="/upload/images/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

</head>
<body>
<!-- header>.container>.header-top(ul>li(a)*3)+.header-meadle(.logo+header-widget+header-search)+nav(ul>li(a)*4) -->
<?php if (isset($productItem)): ?>
    <div>
        <div itemtype="http://schema.org/Product" itemscope>
            <meta itemprop="mpn" content="<?= $productItem['code'] ?>"/>
            <meta itemprop="name" content="<?= $productItem['name'] ?>"/>
            <link itemprop="image" href="<?= $commonData['dom'] . '/upload/images/category/' . $category['image']; ?>"/>
            <meta itemprop="description"
                  content="<?= $productItem['short_description'] ?> ☎<?php echo $commonData['phone1'] ?>"/>
            <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                <link itemprop="url" href="<?= $commonData['dom'] . $_SERVER['REQUEST_URI']; ?>"/>
                <meta itemprop="availability"
                      content=<?php if ($productItem['availability']): ?>"https://schema.org/InStock"<?php else: ?>"https://schema.org/OutOfStock"<?php endif; ?>
                />
                <meta itemprop="priceCurrency" content="UAH"/>
                <meta itemprop="price" content="<?php echo Exchange::exchangePriceNoformat($productItem['price']); ?>"/>
                <meta itemprop="priceValidUntil" content="<?= date('Y-m-d', strtotime('+30 days')); ?>"/>
                <div itemprop="seller" itemtype="http://schema.org/Organization" itemscope>
                    <meta itemprop="name" content="КОЛЯСКА.УКР"/>
                </div>
            </div>

            <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
                <meta itemprop="reviewCount" content="<?= rand(80, 90) ?>"/>
                <meta itemprop="ratingValue" content="4.<?= rand(0, 7) ?>"/>
            </div>
            <div itemprop="review" itemtype="http://schema.org/Review" itemscope>
                <div itemprop="author" itemtype="http://schema.org/Person" itemscope>
                    <meta itemprop="name" content="D.Karp."/>
                </div>
                <div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
                    <meta itemprop="ratingValue" content="<?= rand(3, 4) ?>"/>
                    <meta itemprop="bestRating" content="5"/>
                </div>
            </div>

            <meta itemprop="sku" content="<?= $productItem['code'] ?>"/>
            <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
                <meta itemprop="name" content="<?= $productItem['name'] ?>"/>
            </div>
        </div>
    </div>
<?php endif; ?>

<header class="animated">
    <div class="header-top">

        <div class="container">
            <nav>
                <ul>
                    <li><a href="/#partners">Партнеры</a></li>
                    <li><a href="/delivery/">Доставка и оплата</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                </ul>
            </nav>

            <div class="phone">
                <a href="viber://chat?number=38<?php echo UserModel::transformPhone($commonData['phone1']) ?>"><i
                            class="fas fa-phone-volume"></i> Viber SMS</a>
                <a href="tel:<?php echo UserModel::transformPhone($commonData['phone1']) ?>"><i
                            class="fas fa-phone-volume"></i> <?php echo $commonData['phone1'] ?></a>
                <a href="tel:<?php echo UserModel::transformPhone($commonData['phone2']) ?>"><i
                            class="fas fa-phone-volume"></i> <?php echo $commonData['phone2'] ?></a>
            </div>
        </div>
    </div>

    <div class="header-meadle">
        <div class="container">

            <div class="logo">
                <a href="/"><img src="/upload/images/logo.svg" alt="логотип"></a>
            </div>

            <div class="header-meadle-item">


                <div class="header-widget">
                    <div class="widget-promo">
                        <svg viewBox="0 0 131.25 47.25" preserveAspectRatio="none" style="display:block;" width="130"
                             height="48">
                            <path d="M10.750,0.750 L118.750,4.750 C124.273,4.750 128.750,9.227 128.750,14.750 L129.750,34.750 C129.750,40.273 125.273,44.750 119.750,44.750 L15.750,45.750 C10.227,45.750 5.750,41.273 5.750,35.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                        </svg>
                        <span><a href="/#promo"><span class="mdi mdi-gift"></span> Акция</a></span>
                    </div>

                    <div class="widget-callback">
                        <div class="phone-number">
                            <a href="tel:<?php echo UserModel::transformPhone($commonData['phone1']); ?>"><?php echo $commonData['phone1']; ?></php></a>
                        </div>
                        <div class="callback">
                            <a href="viber://chat?number=38<?php echo UserModel::transformPhone($commonData['phone1']); ?>">Написать
                                на Viber</a>
                        </div>
                    </div>
                    <a href="/cart/">
                        <div class="widget-cart">
                            <div class="cart">
                                <span class="mdi mdi-cart"></span>

                                <div class="purchase" id="cart-count">
                                    <?php echo CartModel::countItems(); ?>
                                </div>
                            </div>
                            <div class="cart-description">
                                <div class="description">
                                    Моя корзина
                                </div>
                                <!--                <div class="sum">                  -->
                                <!--                  --><?php //echo $totalPrice ?><!-- грн./мес.                 -->
                                <!--                </div>-->
                            </div>
                        </div>
                    </a>
                    <div class="widget-login">
                        <svg viewBox="0 0 131.25 47.25" preserveAspectRatio="none" style="display: block;" width="125"
                             height="48">
                            <path d="M119.750,0.750 L11.750,4.750 C6.227,4.750 1.750,9.227 1.750,14.750 L0.750,34.750 C0.750,40.273 5.227,44.750 10.750,44.750 L114.750,45.750 C120.273,45.750 124.750,41.273 124.750,35.750 L129.750,10.750 C129.750,5.227 125.273,0.750 119.750,0.750 Z"></path>
                        </svg>
                        <?php if (isset($_SESSION['user'])): ?>
                            <span><a href="/cabinet/"><span class="mdi mdi-lock-open"></span> Вход</a></span>
                        <?php else: ?>
                            <span><a href="/user/login/"><span class="mdi mdi-lock-open"></span> Вход</a></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="header-search">
                    <svg viewBox="0 0 947.25 42.25" preserveAspectRatio="none" width="940" height="50"
                         style="display: block;">
                        <path d="M10.750,0.750 L935.750,0.750 C941.273,0.750 945.750,5.227 945.750,10.750 L942.750,30.750 C942.750,36.273 936.273,40.750 930.750,40.750 L15.750,40.750 C10.227,40.750 3.750,36.273 3.750,30.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                    </svg>

                    <form class="clearfix" action="/search/" method="GET">
                        <label for="search">Поиск</label>
                        <input id="search" name="query" type="text" placeholder="Товара">
                        <button id="search" type="submit"><i class="fas fa-search"></i></button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="main-menu">
                <ul>
                    <?php foreach ($categoryList as $categoryItem): ?>
                        <?php $prod = ProductModel::LastNewProductInCategory($categoryItem['id']); ?>
                        <?php if ($prod): ?>
                            <li>
                                <svg class="<?php if (isset($category_url)) {
                                    if ($categoryItem['url'] == $category_url) echo 'active';
                                } ?>" viewBox="0 0 120 47.25" preserveAspectRatio="none" style="display: block;"
                                     width="150" height="50">
                                    <path d="M10.750,0.750 L105.750,4.750 C111.273,4.750 115.750,9.227 115.750,14.750 L116.750,34.750 C116.750,40.273 112.273,44.750 106.750,44.750 L15.750,45.750 C10.227,45.750 5.750,41.273 5.750,35.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                                </svg>
                                <a href="/products/category/<?php echo $categoryItem['url']; ?>/"><?php echo $categoryItem['name']; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
