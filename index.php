<?php
$configData = include('./config.php');
$configData = explode("|", $configData);

$headerConf = $configData[0];
$brand = $configData[1];
$urAddress = $configData[2];
$fizAddress = $configData[3];
$ico = $configData[4];
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

?>
<!DOCTYPE html>

<html lang="ru">

<head>
  <title><?= $headerConf . ' ' . $brand ?> в Москве и МО | сеть сервисных центров <?= $brand ?></title>
  <meta name="description" content="<?= $headerConf . ' ' . $brand ?> в Москве и МО. Ремонт вашей техники с гарантией! Доставка курьером в сервис центр бесплатно." />
  <meta name="keywords" content="ремонт <?= $brand ?>, сервис центр <?= $brand ?>, <?= $headerConf . ' ' . $brand ?>, сервисный центр <?= $brand ?>" />
  <link rel="icon" href="<?= $ico ?>" type="image/x-icon">
  <link rel="canonical" href="<?= $url ?>" />
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
    <?php include 'blocks/preview.php'; ?>
    <?php include 'blocks/info.php'; ?>
    <?php include 'blocks/uslugi.php'; ?>
    <?php include 'blocks/feedbacks.php'; ?>
  </main>
  <footer class="main-footer">
    <?php include 'blocks/footer.php'; ?>
  </footer>
  <script src="js/main.js"></script>
</body>

</html>