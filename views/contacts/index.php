<?php require(ROOT . '/views/layouts/header.php'); ?>


<main>
    <div class="contact">
        <div class="container">

            <div class="phone-numb">
                <h2>
                    Контактные данные
                </h2>
                <p>
                    <?php echo $commonData['phone1']; ?><br>
                    <?php echo $commonData['phone2']; ?><br>
                </p>
            </div>

            <div class="adress">
                <h2>
                    Пункт самовывоза
                </h2>
                <p>
                    г. Одесса<br>
                    ул. Рыбальская 23/25<br>
                    Киевский район
                </p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2752.0324436558208!2d30.740315315715872!3d46.38858157930721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c634b7584570e7%3A0x5795062b763c497e!2z0KDRi9Cx0LDQu9GM0YHQutCw0Y8g0YPQuy4sIDIzLCDQntC00LXRgdGB0LAsINCe0LTQtdGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDY1MDAw!5e0!3m2!1sru!2sua!4v1555656086330!5m2!1sru!2sua"
                    width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</main>
<?php require(ROOT . '/views/layouts/footer.php'); ?>
