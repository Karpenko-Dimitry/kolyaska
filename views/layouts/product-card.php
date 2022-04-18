<div class="col4">
    <a href="/products/<?php echo $productItem['url']; ?>/">
        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215" height="235">
            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
        </svg>
        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             width="308" height="224" viewBox="0 0 308 224" fill="none">
            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                  fill="url(#stroller<?php echo $productItem['id']; ?>)"/>
            <defs>
                <pattern id="stroller<?php echo $productItem['id']; ?>" patternContentUnits="objectBoundingBox"
                         width="1" height="1">
                    <use xlink:href="#photo_stroller<?php echo $productItem['id']; ?>"
                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                </pattern>
                <?php if (is_file(ROOT . '/upload/images/product/' . $productItem['image'])): ?>
                    <image id="photo_stroller<?php echo $productItem['id']; ?>" x="-10" y="2" width="26%" height="26%"
                           xlink:href="/upload/images/product/<?php echo $productItem['image']; ?>"/>
                <?php else: ?>
                    <image id="photo_stroller<?php echo $productItem['id']; ?>" x="-10" y="2" width="26%" height="26%"
                           xlink:href="/upload/images/product/no-image.png"/>
                <?php endif ?>

            </defs>
        </svg>
        <div class="goods-price">
            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92" height="36">
                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
            </svg>
            <div class="value">

                <?php if ($productItem['is_sale']): ?>
                    <span class="line-through"> <?php echo Exchange::exchangePrice($productItem['presale_price']) . ' ' . $productItem['period'] ?> </span>
                    <br>
                <?php endif; ?>
                <?php echo Exchange::exchangePrice($productItem['price']) . ' ' . $productItem['period']; ?>
            </div>
        </div>

        <?php if ($productItem['is_new']): ?>

            <div class="label new left">
                <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44" height="27">
                    <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                </svg>
                <span>новинка</span>
            </div>

        <?php endif ?>

        <?php if ($productItem['is_sale']): ?>

            <div class="label discount left">
                <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44" height="27">
                    <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                </svg>
                <span>скидка</span>
            </div>

        <?php endif ?>

        <h2>
            <?php echo $productItem['type']; ?><br> <?php echo $productItem['name']; ?>
        </h2>
    </a>
    <div class="btn-more_yellow">
        <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;" width="148" height="54">
            <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
        </svg>
        <a href="#" class="add-to-cart" data-id="<?php echo $productItem['id']; ?>">Арендовать <i
                    class="fas fa-shopping-cart"></i></a>
    </div>
</div>