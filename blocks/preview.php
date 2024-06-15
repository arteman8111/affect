<?php
$configData = include('./config.php');
$configData = explode("|", $configData);

$headerConf = $configData[0];
$brand = $configData[1];
$urAddress = $configData[2];
$fizAddress = $configData[3];
$ico = $configData[4];

?>
<section class="preview">
    <div class="container">
        <div class="preview__container">
            <h2 class="preview__title">СЕРВИСНЫЙ ЦЕНТР ПО РЕМОНТУ ТЕХНИКИ РЕОСТАРТ</h2>
            <p class="preview__description">Ремонтируем ноутбуки. Ремонтируем бензиновую технику. Ремонтируем телевизоры. Мы ремонтируем, диагностируем и модернизируем вашу электронику, чтобы она снова работала как новая.</p>
            <div class="preview__box">
                <a href="/remont-blenderov.php" class="button preview__button">Услуги по ремонту</a>
                <a href="/contacts.php" class="button preview__button preview__contacts">Контакты</a>
            </div>
        </div>
    </div>
</section>