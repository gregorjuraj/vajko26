<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<section class="home-intro">
    <div>
        <h1>Pneuservis a recyklácia vozidiel v Oslanoch</h1>

        <p>
            Zabezpečujeme prezúvanie a vyvažovanie kolies,
            doplnkové služby a recykláciu starých či havarovaných
            vozidiel. Navštívte našu prevádzku v Oslanoch
            alebo si rezervujte termín online.
        </p>

        <div class="home-actions">
            <a href="<?= $link->url('home.rezervacia') ?>" class="button">
                Rezervovať termín
            </a>

            <a href="<?= $link->url('home.contact') ?>" class="home-contact-link">
                Kontaktovať nás
            </a>
        </div>
    </div>

    <img
            src="<?= $link->asset('images/recyklacia-prevadzka.jpg') ?>"
            alt="Prevádzka Autodiely Oslany"
            class="home-photo"
            width="349"
            height="262"
    >
</section>

<section class="home-services">
    <h2>Naše služby</h2>

    <div class="home-services-grid">
        <article class="home-service-card">
            <h3>Pneuservis</h3>

            <p>
                Prezutie a vyváženie kolies, opravy defektov
                a umývanie kolies pre osobné aj úžitkové vozidlá.
            </p>

            <a href="<?= $link->url('home.pneuservis') ?>">
                Pozrieť služby →
            </a>
        </article>

        <article class="home-service-card">
            <h3>Recyklácia vozidiel</h3>

            <p>
                Odovzdanie starého či havarovaného vozidla,
                možnosť odvozu a prehľad potrebných dokumentov.
            </p>

            <a href="<?= $link->url('home.recyklacia') ?>">
                Informácie o recyklácii →
            </a>
        </article>
    </div>
</section>

<section class="home-booking">
    <h2>Ako si rezervovať termín</h2>

    <ol class="home-booking-steps">
        <li>
            <h3>Vyberte vozidlo a služby</h3>
            <p>Zvoľte hlavný úkon a prípadné doplnkové služby.</p>
        </li>

        <li>
            <h3>Zvoľte voľný termín</h3>
            <p>Vyberte dátum a čas, ktorý vám vyhovuje.</p>
        </li>

        <li>
            <h3>Potvrďte rezerváciu</h3>
            <p>Skontrolujte údaje a príďte v dohodnutom termíne.</p>
        </li>
    </ol>
</section>