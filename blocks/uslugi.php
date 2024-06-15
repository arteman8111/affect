<?php
$uslugi = './data/uslugi.json';
if (file_exists($uslugi)) {
    $uslugi = file_get_contents($uslugi);
    $uslugi = json_decode($uslugi, true);
}
?>
<section class="uslugi">
    <h2 class="uslugi__title">Представляем вашему вниманию наши услуги</h2>
    <ul class="uslugi__list">
        <?php
        foreach ($uslugi as $usluga) {
        ?>
            <li class="remont">
                <div class="container">
                    <img class="remont__img" src="img/<?= $usluga["link"] ?>.png" alt="<?= $usluga["name"] ?>" width="553" height="553">
                    <div class="remont__box">
                        <h3 class="remont__title"><?= $usluga["name"] ?></h3>
                        <p class="remont__description"><?= $usluga["description"] ?></p>
                        <a href="/<?= $usluga["link"] ?>.php" class="button remont__button" style="text-align:start; max-width: 300px; margin: 0"><?= $usluga["name"] ?></a>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</section>