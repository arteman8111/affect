<?php
$uslugi = './data/bitovay-technika.json';
if (file_exists($uslugi)) {
    $uslugi = file_get_contents($uslugi);
    $uslugi = json_decode($uslugi, true);
}
$uslugi_computer = './data/computer-technika.json';
if (file_exists($uslugi_computer)) {
    $uslugi_computer = file_get_contents($uslugi_computer);
    $uslugi_computer = json_decode($uslugi_computer, true);
}
$uslugi_benzin = './data/remont-benzinovoj-tekhniki.json';
if (file_exists($uslugi_benzin)) {
    $uslugi_benzin = file_get_contents($uslugi_benzin);
    $uslugi_benzin = json_decode($uslugi_benzin, true);
}
?>
<nav class="navigation">
    <div class="nav-container hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label id="menu__btn" class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <a href="index.php" class="logo__link">
            <div class="logo">
                <i class="fa-solid fa-gear"></i>
                <h1 class="navigation__title">Рестарт</h1>
            </div>
        </a>
        <ul class="navigation__list menu__box">
            <li class="navigation__item">
                <i class="fa-solid fa-house"></i>
                <a href="/" class="navigation__link">Главная</a>
            </li>
            <li class="navigation__item accordionItem">
                <i class="fa-solid fa-key"></i>
                <a href="navigation.php" class="navigation__link accordionItemHeading">Услуги по ремонту</a>
                <ul class="accordionItemContent">
                    <li class="navigation__item">
                        <div class="navigation__link" style="cursor:default">Ремонт бензиновой техники</div>
                        <ul class="first">
                            <?php
                            foreach ($uslugi_benzin as $usluga) {
                            ?>
                                <li class="navigation__item">
                                    <a href="/<?= $usluga["link"] ?>.php" class="navigation__link"><?= $usluga["description"] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="navigation__item">
                        <div class="navigation__link" style="cursor:default">Ремонт бытовой техники</div>
                        <ul class="first">
                            <?php
                            foreach ($uslugi as $usluga) {
                            ?>
                                <li class="navigation__item">
                                    <a href="/<?= $usluga["link"] ?>.php" class="navigation__link"><?= $usluga["description"] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="navigation__item">
                        <div class="navigation__link" style="cursor:default">Ремонт компьютерной техники</div>
                        <ul>
                            <?php
                            foreach ($uslugi_computer as $usluga) {
                            ?>
                                <li class="navigation__item">
                                    <a href="/<?= $usluga["link"] ?>.php" class="navigation__link"><?= $usluga["description"] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="navigation__item">
                <i class="fa-solid fa-globe"></i>
                <a href="/about.php" class="navigation__link">О нас</a>
            </li>
            <li class="navigation__item">
                <i class="fa-solid fa-person"></i>
                <a href="/contacts.php" class="navigation__link">Контакты</a>
            </li>
            <li class="navigation__item">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+74991134462" class="navigation__link">Телефон</a>
            </li>
        </ul>
    </div>
</nav>