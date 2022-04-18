<?php require_once(ROOT . '/views/layouts/admin_header.php') ?>
<div class="container">
    <form action="#" method="POST">
        <div class="wrapper">
            <label for="dom">Домменное имя</label>
            <input type="text" name="dom" id="dom" value="<?php echo $commonData['dom']; ?>">
        </div>
        <div class="wrapper">
            <label for="site_name">Название сайта</label>
            <input type="text" name="site_name" id="site_name" value="<?php echo $commonData['site_name']; ?>">
        </div>
        <div class="wrapper">
            <label for="phone1">Телефон 1</label>
            <input type="text" name="phone1" id="phone1" value="<?php echo $commonData['phone1']; ?>">
        </div>
        <div class="wrapper">
            <label for="phone2">Телефон 2</label>
            <input type="text" name="phone2" id="phone2" value="<?php echo $commonData['phone2']; ?>">
        </div>
        <div class="wrapper">
            <label for="ex_rate">Установленный курс валюты <br>(ПриватБанк - <?php echo $сurrentExRate; ?>)</label>
            <input type="text" name="ex_rate" id="ex_rate" value="<?php echo $commonData['ex_rate']; ?>">
        </div>
        <input id="submit" type="submit" name="submit" value="Обновить">
    </form>

    <?php if (isset($errors) && $errors): ?>
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

</div>
<?php require_once(ROOT . '/views/layouts/admin_footer.php') ?>
