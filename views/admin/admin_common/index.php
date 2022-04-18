<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
<div class="container">
    <p>Домменное имя - <?php echo $commonData['dom']; ?></p>
    <p>Название сайта - <?php echo $commonData['site_name']; ?></p>
    <p>Телефон 1 - <?php echo $commonData['phone1']; ?></p>
    <p>Телефон 2 - <?php echo $commonData['phone2']; ?></p>
    <p>Установленный курс - <?php echo $commonData['ex_rate']; ?></p>
    <p>Курс продажи ПриватБанк - <?php echo $сurrentExRate; ?></p>
    <p><a class="button" href="/admin/common/edit/"> Изменить </a></p>

</div>
<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>
