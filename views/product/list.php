<?php require(ROOT . '/views/layouts/header.php'); ?>

    <main>

        <div id="catalog" class="catalog">
            <div class="container">
                <h2>Каталог продукции</h2>
                <nav>
                    <ul>
                        <?php foreach ($categoryList as $categoryItem): ?>
                            <li>
                                <svg viewBox="0 0 120 47.25" preserveAspectRatio="none" style="display: block;"
                                     width="120" height="40">
                                    <path d="M10.750,0.750 L105.750,4.750 C111.273,4.750 115.750,9.227 115.750,14.750 L116.750,34.750 C116.750,40.273 112.273,44.750 106.750,44.750 L15.750,45.750 C10.227,45.750 5.750,41.273 5.750,35.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                                </svg>
                                <a href="/products/category/<?php echo $categoryItem['id']; ?>/"><?php echo $categoryItem['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Коляски -->

        <div class="stroller">
            <div class="container">
                <div class="catalog-items">
                    <h2 id="strollers">
                        Коляски
                    </h2>

                    <!-- Коляска 1 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#stroller1)"/>
                            <defs>
                                <pattern id="stroller1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#photo_stroller1"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="photo_stroller1" x="-10" y="2" width="26%" height="26%"
                                       xlink:href="images/Eclips_CRL-12001/crl-12001_green.jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                3 630 грн./мес.
                            </div>
                        </div>
                        <h2>
                            Прогулочная коляска <br> Carrello Eclipse
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-eclipse.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Коляска 2 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#stroller2)"/>
                            <defs>
                                <pattern id="stroller2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#photo_stroller2"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="photo_stroller2" x="-15" y="-10" width="93" height="93"
                                       xlink:href="images/carrello-con/connect.jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                5 950 грн./мес.
                            </div>
                        </div>
                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>
                        <h2>
                            Прогулочная коляска для двойни <br> Carrello Connect
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-connect.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Коляска 3 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-maestro-new"/>
                            <defs>
                                <pattern id="carrello-maestro-new" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-maestro-new_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-maestro-new_photo" x="-10" y="-3" width="70" height="70"
                                       xlink:href="images/carrello-maestro-new/carrello-maestro-new(2).jpg"/>
                            </defs>
                        </svg>

                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">3 600 грн./мес.</div>
                        </div>

                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>

                        <h2>
                            Прогулочная коляска<br> Carrello Maestro
                        </h2>

                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-maestro-new.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Коляска 4 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-astra"/>
                            <defs>
                                <pattern id="carrello-astra" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-astra_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-astra_photo" x="-10" y="-5" width="78" height="78"
                                       xlink:href="images/carrello-astra/carrello-astra(1).jpg"/>
                            </defs>
                        </svg>

                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">3 139 грн./мес.</div>
                        </div>

                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>

                        <h2>
                            Прогулочная коляска<br> Carrello Astra
                        </h2>

                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-astra.html">подробнее &raquo</a>
                        </div>
                    </div>


                    <!-- Коляска 5 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#cybex-eternis)"/>
                            <defs>
                                <pattern id="cybex-eternis" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#cybex-eternis_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="cybex-eternis_photo" x="-9" y="0" width="75" height="75"
                                       xlink:href="images/cybex-eternis/cybex-eternis(1).jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                <span class="line-through">5 850 грн.</span><br>
                                5 555 грн.
                            </div>
                        </div>
                        <div class="label discount left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>скидка</span>
                        </div>
                        <h2>
                            Прогулочная коляска <br> CYBEX Eternis M4
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="cybex-eternis.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Коляска 6 -->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-pilot)"/>
                            <defs>
                                <pattern id="carrello-pilot" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-pilot_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-pilot_photo" x="-9" y="0" width="75" height="71"
                                       xlink:href="images/carrello-pilot/carrello-pilot_c9c3b7-1280x800.jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                <!-- <span class="line-through">5 850 грн.</span><br> -->
                                3 018 грн.
                            </div>
                        </div>
                        <!--  <div class="label discount left">
                          <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44" height="27">
                            <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                          </svg>
                          <span>скидка</span>
                        </div> -->
                        <h2>
                            Прогулочная коляска <br> Carrello Pilot
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-pilot.html">подробнее &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cтульчики -->

        <div class="chair">
            <div class="container">
                <div class="catalog-items">
                    <h2 id="chair">
                        Стульчики для кормления
                    </h2>

                    <!-- Cтульчики 1-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-toffee)"/>
                            <defs>
                                <pattern id="carrello-toffee" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-toffee_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-toffee_photo" x="0" y="7" width="23%" height="23%"
                                       xlink:href="images/carrello-toffee/carrello-toffee(1).jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                2 184 грн.
                            </div>
                        </div>
                        <h2>
                            Стульчик для кормления <br> Carrello Toffe
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-toffee.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Cтульчики 2-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-triumph)"/>
                            <defs>
                                <pattern id="carrello-triumph" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-triumph_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-triumph_photo" x="-7" y="7" width="25%" height="25%"
                                       xlink:href="images/carrello-triumph/carrello-triumph(2).jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                3 900 грн.
                            </div>
                        </div>
                        <h2>
                            Cтульчик-качелька 3 в 1 <br> Carrello Triumph
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-triumph.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Cтульчики 3-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-caramel)"/>
                            <defs>
                                <pattern id="carrello-caramel" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-caramel_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-caramel_photo" x="0" y="-3" width="70" height="70"
                                       xlink:href="images/carrello-caramel/carrello-caramel_candy-pink_e3c2c5.jpg"/>
                            </defs>
                        </svg>

                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">2 115 грн.</div>
                        </div>

                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>

                        <h2>
                            Стульчик для кормления <br> Carrello Caramel
                        </h2>

                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-caramel.html">подробнее &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Манежи -->

        <div id="playpen" class="playpen">
            <div class="container">
                <div class="catalog-items">
                    <h2>
                        Манежи
                    </h2>

                    <!-- Манежи 1-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-grand)"/>
                            <defs>
                                <pattern id="carrello-grand" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-grand_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-grand_photo" x="-5" y="3" width="25%" height="25%"
                                       xlink:href="images/carrello-grand/carrello-grand(2).jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                1 580 грн.
                            </div>
                        </div>
                        <h2>
                            Квадратный манеж <br> Carrello Grand
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-grand.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Манежи 2-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#carrello-polo)"/>
                            <defs>
                                <pattern id="carrello-polo" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#carrello-polo_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="carrello-polo_photo" x="-9" y="-10" width="85" height="85"
                                       xlink:href="images/carrello-polo/carrello-polo (1).jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                1 610 грн.
                            </div>
                        </div>
                        <h2>
                            Манеж прямоугольный <br> Carrello Polo
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="carrello-polo.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Манежи 3-->

                    <div class="col4 disable">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#catalog-playpen)"/>
                            <defs>
                                <pattern id="catalog-playpen" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#playpen1"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="playpen1" x="0" y="-3" width="70" height="70"
                                       xlink:href="images/catalog-playpen.jpg"/>
                            </defs>
                        </svg>

                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">1 580 грн.</div>
                        </div>

                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>

                        <h2>
                            Квадратный манеж <br> Carrello Grande
                        </h2>

                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="">подробнее &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Укачивающие центры -->

        <div id="rockcenter" class="rockcenter">
            <div class="container">
                <div class="catalog-items">
                    <h2 id="strollers">
                        Укачивающие центры
                    </h2>
                    <!-- Укачивающие центры 1-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#cam-gironanna)"/>
                            <defs>
                                <pattern id="cam-gironanna" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#cam-gironanna_photo"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="cam-gironanna_photo" x="-15" y="0" width="30%" height="30%"
                                       xlink:href="images/cam/cam.jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                <span class="line-through">6 050 грн.</span> <br>
                                4 550 грн.
                            </div>
                        </div>
                        <div class="label discount left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>скидка</span>
                        </div>
                        <h2>
                            Укачивающий центр <br> САМ Gironanna Evo
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="cam-gironanna.html">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Укачивающие центры 2-->

                    <div class="col4 disable">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#catalog-chair)"/>
                            <defs>
                                <pattern id="catalog-chair" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#chair"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="chair" x="-9" y="-5" width="75" height="75"
                                       xlink:href="images/catalog-chair.png"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                2 180 грн.
                            </div>
                        </div>
                        <h2>
                            Cтульчик для кормления <br> Carrello Toffee
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="">подробнее &raquo</a>
                        </div>
                    </div>

                    <!-- Укачивающие центры 3-->

                    <div class="col4 disable">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#catalog-playpen)"/>
                            <defs>
                                <pattern id="catalog-playpen" patternContentUnits="objectBoundingBox" width="1"
                                         height="1">
                                    <use xlink:href="#playpen2"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="playpen2" x="0" y="-3" width="70" height="70"
                                       xlink:href="images/catalog-playpen.jpg"/>
                            </defs>
                        </svg>

                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">1 580 грн.</div>
                        </div>

                        <div class="label new left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>новинка</span>
                        </div>

                        <h2>
                            Квадратный манеж <br> Carrello Grande
                        </h2>

                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="">подробнее &raquo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Аксессуары -->

        <div id="accessories" class="accessories">
            <div class="container">
                <div class="catalog-items">
                    <h2 id="accessories">
                        Аксессуары
                    </h2>
                    <!-- Аксессуары 1-->

                    <div class="col4">
                        <svg class="back-decor" viewBox="0 0 197.25 192.25" style="display: block;" width="215"
                             height="235">
                            <path d="M10.750,10.750 L185.750,0.750 C191.273,0.750 195.750,5.227 195.750,10.750 L195.750,180.750 C195.750,186.273 191.273,190.750 185.750,190.750 L10.750,180.750 C5.227,180.750 0.750,176.272 0.750,170.750 L0.750,20.750 C0.750,15.227 5.227,10.750 10.750,10.750 Z"></path>
                        </svg>
                        <svg class="front-decor" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="308" height="224" viewBox="0 0 308 224"
                             fill="none">
                            <path d="M3.88398 0L304.116 13.1765C306.261 13.1765 308 16.126 308 19.7647L292.464 210.824C292.464 214.462 290.725 217.412 288.58 217.412L19.4199 224C17.2748 224 15.5359 221.05 15.5359 217.412L0 6.58824C0 2.94955 1.73886 0 3.88398 0Z"
                                  fill="url(#slider1)"/>
                            <defs>
                                <pattern id="slider1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#Cocoonababy"
                                         transform="translate(0 -0.1875) scale(0.015625 0.0214844)"/>
                                </pattern>
                                <image id="Cocoonababy" x="0" y="-3" width="70" height="70"
                                       xlink:href="images/Cocoonababy/Cocoonababy.jpg"/>
                            </defs>
                        </svg>
                        <div class="goods-price">
                            <svg viewBox="0 0 78 36" preserveAspectRatio="none" style="display: block;" width="92"
                                 height="36">
                                <path d="M5.000,-0.000 L73.000,4.000 C75.761,4.000 78.000,6.238 78.000,9.000 L74.000,31.000 C74.000,33.761 71.761,36.000 69.000,36.000 L5.000,36.000 C2.239,36.000 -0.000,33.761 -0.000,31.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <div class="value">
                                <span class="line-through">4 999 грн.</span> <br>
                                4 600 грн.
                            </div>
                        </div>
                        <div class="label discount left">
                            <svg viewBox="0 0 70 27" preserveAspectRatio="none" style="display: block;" width="44"
                                 height="27">
                                <path d="M5.000,-0.000 L65.000,3.000 C67.761,3.000 70.000,5.239 70.000,8.000 L67.000,22.000 C67.000,24.761 64.761,27.000 62.000,27.000 L5.000,27.000 C2.239,27.000 -0.000,24.761 -0.000,22.000 L-0.000,5.000 C-0.000,2.238 2.239,-0.000 5.000,-0.000 Z"></path>
                            </svg>
                            <span>скидка</span>
                        </div>
                        <h2>
                            Кокон <br> Cocoonababy Red Castle
                        </h2>
                        <div class="btn-more_yellow">
                            <svg viewBox="0 0 171.25 57.25" preserveAspectRatio="none" style="display: block;"
                                 width="148" height="54">
                                <path d="M10.750,0.750 L158.750,4.750 C164.273,4.750 168.750,9.227 168.750,14.750 L169.750,44.750 C169.750,50.273 165.273,54.750 159.750,54.750 L15.750,55.750 C10.227,55.750 5.750,51.273 5.750,45.750 L0.750,10.750 C0.750,5.227 5.227,0.750 10.750,0.750 Z"></path>
                            </svg>
                            <a href="Cocoonababy.html">подробнее &raquo</a>
                        </div>
                    </div>

    </main>

<?php require(ROOT . '/views/layouts/footer.php'); ?>