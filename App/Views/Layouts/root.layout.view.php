<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pneuservis a recyklácia vozidiel</title>

    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/rezervacia.css') ?>">
</head>
<body>
<header class="site-header">
    <a href="<?= $link->url('home.index') ?>" class="brand">
        <img
                src="<?= $link->asset('images/autodiely_oslany_logo.png') ?>"
                alt="Logo firmy"
                class="brand-logo"
        >

        <span class="brand-text">
            <strong>Autodiely Oslany</strong>
            <span>Pneuservis a recyklácia vozidiel</span>
        </span>
    </a>

    <nav class="main-nav" aria-label="Hlavná navigácia">
        <a href="<?= $link->url('home.index') ?>">Úvod</a>
        <a href="<?= $link->url('home.pneuservis') ?>">Pneuservis</a>
        <a href="<?= $link->url('home.recyklacia') ?>">Recyklácia vozidiel</a>
        <a href="<?= $link->url('home.contact') ?>">Kontakt</a>
    </nav>

    <div class="header-actions">
        <a href="#" class="account-link">
            Prihlásenie / Registrácia
        </a>

        <a href="<?= $link->url('home.rezervacia') ?>" class="button">
            Rezervovať termín
        </a>
    </div>
</header>

<main class="page-content">
    <?= $contentHTML ?>
</main>

<footer class="site-footer">
    <div>
        <h2>AUTODIELY OSLANY s.r.o.</h2>
        <p>Pneuservis a recyklácia vozidiel</p>
        <p>Mierová 974 · 97247 Oslany</p>
    </div>

    <div>
        <h2>Kontakt</h2>
        <p>Telefón: +421 904 643 696</p>
        <p>Telefón: +421 917 831 488</p>
        <p>E-mail: autodielyoslany@gmail.com</p>
    </div>

    <div>
        <h2>Otváracie hodiny</h2>
        <p>Pracovné dni: 8:00 – 16:00</p>
        <p>Sobota: 8:00 - 12:00</p>
        <p>Nedeľa: zatvorené</p>
    </div>

    <div class="footer-facebook">
        <h2>Sledujte nás</h2>

        <!-- Facebook sa otvorí na novej karte. -->
        <!-- noopener a noreferrer chránia pôvodnú kartu a neposielajú adresu zdrojovej stránky. -->
        <a
                href="https://www.facebook.com/profile.php?id=100054278196876"
                target="_blank"
                rel="noopener noreferrer"
                class="facebook-icon"
                aria-label="Naša stránka na Facebooku"
        >
            <img
                    src="<?= $link->asset('images/facebook.png') ?>"
                    alt=""
                    width="32"
                    height="32"
            >
        </a>
    </div>
</footer>

</body>
</html>
