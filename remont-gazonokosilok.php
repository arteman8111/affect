<?php
$configData = include('./config.php');
$configData = explode("|", $configData);

$headerConf = $configData[0];
$brand = $configData[1];
$urAddress = $configData[2];
$fizAddress = $configData[3];
$ico = $configData[4];

$headerConf = "Ремонт газонокосилок";
$priceText = "газонокосилка";
$link = "remont-gazonokosilok"
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
      <table class="price-table"><thead><tr><th>Услуга</th><th>Цена</th><th>Услуга</th><th>Цена</th></tr></thead><tbody><tr><td>Замена генератора в сборе</td><td>1580</td><td>Замена карбюратора или прокладки карбюратора</td><td>1200</td></tr><tr><td>Замена впускного коллектора или прокладки</td><td>1310</td><td>Замена ручного стартера в сборе</td><td>830</td></tr><tr><td>Замена сальника вала отбора мощности</td><td>1540</td><td>Замена, снятие крышки картера или прокладки картера</td><td>2160</td></tr><tr><td>Замена головки блока цилиндра, прокладки ГБЦ</td><td>1640</td><td>Замена клапанов – боковые клапаны</td><td>2510</td></tr><tr><td>Регулировка клапанных зазоров двигателей OHV</td><td>1540</td><td>Замена сальника дополнительного вала отбора мощности</td><td>1540</td></tr><tr><td>Замена подшипника со стороны вала отбора мощности</td><td>2610</td><td>Профилактика двигателя с чисткой, сборкой – разборкой</td><td>5690</td></tr><tr><td>Замена масла</td><td>680</td><td>Замена консоли управления</td><td>1550</td></tr><tr><td>Замена срезного болта</td><td>260</td><td>Замена щеток на генераторах</td><td>от 200</td></tr><tr><td>Регулировка ремня</td><td>400</td><td></td><td></td></tr></tbody></table>
      </div>
    </div>
  </main>
  <footer class="submain-footer">
    <?php include 'blocks/footer.php'; ?>
  </footer>
  <script src="js/main.js"></script>
</body>

</html>