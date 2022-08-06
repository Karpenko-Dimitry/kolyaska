<footer>

    <div class="footer-back">
        <div class="container">
            <div class="btn-back">
                <svg viewBox="0 0 48.25 30.25" preserveAspectRatio="none" style="display: block;" width="47"
                     height="30">
                    <path d="M11.750,0.750 L35.750,1.750 C41.273,1.750 44.607,6.348 45.750,12.750 L46.750,17.750 C46.750,23.273 42.273,27.750 36.750,27.750 L10.750,28.750 C5.227,28.750 0.750,24.273 0.750,18.750 L1.750,10.750 C2.454,4.963 6.227,0.750 11.750,0.750 Z"></path>
                </svg>
                <a href="#"> <span class="mdi mdi-arrow-up-thick"></span></a>
            </div>
        </div>
    </div>

    <div class="footer-nav">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#partners">Партнеры</a>
                    </li>
                    <li>
                        <a href="/delivery/">Доставка и оплата</a>
                    </li>
                    <li>
                        <a href="/contacts/">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="footer-widgets">
        <div class="container">
            <div class="widget">
                <h3>
                    Пункт выдачи
                </h3>
                <p>
                    г. Одесса, Киевский р-н: <br>ул. Рыбальская, 23/25 (угол ул. Долгая)
                </p>
            </div>
            <div class="widget">
                <h3>
                    социальные сети
                </h3>
                <div class="soc">
                    <a href="https://www.instagram.com/prokat.ukr/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/probably.ukr/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC2cUZVIwDwFk2e2zEZ1Vd7A?view_as=subscriber"
                       target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="widget">
                <div class="widget-callback">
                    <div class="phone-number">
                        <a href="tel:<?php echo UserModel::transformPhone($commonData['phone1']) ?>"><?php echo $commonData['phone1'] ?></a>

                    </div>
                    <div class="phone-number">
                        <a href="tel:<?php echo UserModel::transformPhone($commonData['phone2']) ?>"><?php echo $commonData['phone2'] ?></a>
                    </div>
                    <div class="callback">
                        <a href="viber://chat?number=38<?php echo UserModel::transformPhone($commonData['phone1']); ?>">Написать
                            на viber</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<script src="/template/js/slider.js"></script>
<script src="/template/js/modal.js"></script>
<script src="/template/js/goods.js"></script>
<script src="/template/js/validate.js"></script>
<script src="/template/js/jquery-3.4.1.js"></script>
<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            var color = $(this).attr("data-color") || 'no-color';
            var btn = this;
            $(this).addClass("animated zoomOutDown");

            function clearAnimation() {
                $(btn).removeClass("animated zoomOutDown");
            };

            setTimeout(clearAnimation, 1000);

            $.post("/cart/addAjax/" + id + "/" + color, {}, function (data) {
                $("#cart-count").html(data);

            });
            return false;
        });
    });
</script>



</body>
</html>