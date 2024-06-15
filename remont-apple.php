<?php
$configData = include('./config.php');
$configData = explode("|", $configData);

$headerConf = $configData[0];
$brand = $configData[1];
$urAddress = $configData[2];
$fizAddress = $configData[3];
$ico = $configData[4];

$headerConf = "Ремонт APPLE";
$link = "remont-apple"
?>
<!DOCTYPE html>

<html lang="ru">

<head>
  <title><?= $headerConf . ' ' . $brand ?> в Москве и МО | сеть сервисных центров </title>
  <meta name="description" content="<?= $headerConf . ' ' . $brand ?> в Москве и МО. Ремонт вашей техники с гарантией! Доставка курьером в сервис центр бесплатно." />
  <meta name="keywords" content="ремонт , сервис центр , <?= $headerConf . ' ' . $brand ?>, сервисный центр " />
  <link rel="icon" href="<?= $ico ?>" type="image/x-icon">
  <link rel="canonical" href="https://<?= strtolower($brand) ?>.ru" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="wrapper">
  <header class="main-header header">
    <?php include 'blocks/header.php'; ?>
  </header>
  <main>
    <section class="description">
      <div class="container">
        <img class="description__img" src="img/<?=$link?>.png" alt="<?=$headerConf?>">
        <div class="description__box">
          <b class="description__addres">РАБОТАЕМ ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</b>
          <h3 class="description__title"><?=$headerConf?></h3>
          <p class="description__text">Наши техники по ремонту являются экспертами в области ремонта и устранения неполадок. Они могут решить любую проблему, которая может возникнуть у вас.

          <a href="tel:+74991134462" class="button description__button">+74991134462</a>
        </div>
      </div>
    </section>
    <div class="container price-box">
      <div class="row">
      <table class="price-table"><thead><tr><th>Услуга</th><th>Цена</th><th>Услуга</th><th>Цена</th></tr></thead><tbody><tr><td>Курьерские услуги</td><td>700</td><td>Ремонт блока питания</td><td>850</td></tr><tr><td>Ремонт блока инвертора</td><td>850</td><td>Ремонт платы MainBord</td><td>1600</td></tr><tr><td>Ремонт платы T-CON</td><td>1600</td><td>Ремонт платы TV-тюнера</td><td>1600</td></tr><tr><td>Ремонт платы X-SUS</td><td>850</td><td>Ремонт платы XL/XR</td><td>850</td></tr><tr><td>Ремонт платы LED-драйвера</td><td>1600</td><td>Ремонт шлейфа матрицы</td><td>4800</td></tr><tr><td>Замера разъема HDMI</td><td>700</td><td>Замена платы MainBord</td><td>400</td></tr><tr><td>Восстановление цепи питания</td><td>800</td><td>Прошивка</td><td>1200</td></tr><tr><td>Ремонт Edge LED подсветки</td><td>1400</td><td>Ремонт Direct LED подсветки</td><td>1200</td></tr><tr><td>Замена матрицы</td><td>1500</td><td></td><td></td></tr></tbody></table>
    </div>
    </div>
  </main>
  <footer class="submain-footer">
    <?php include 'blocks/footer.php'; ?>
  </footer>
  <script src="js/main.js"></script>
</body>

</html>