<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<section class="tyre-service-page">
    <h1>Pneuservis</h1>

    <div class="tyre-service-intro">
        <div>
            <h2>Profesionálna starostlivosť o vaše kolesá</h2>

            <p>
                Pneuservisné služby vykonávame na moderných strojoch,
                ktoré sú pravidelne kalibrované. Zabezpečujeme odbornú
                výmenu pneumatík, diskov, duší a ventilov vrátane
                vyváženia, hustenia a ekologickej likvidácie
                ojazdených pneumatík.
            </p>

            <p>
                Naše služby sú určené pre osobné vozidlá, VAN,
                off-road a úžitkové automobily do 3,5 t.
            </p>

            <ul>
                <li>Pracujeme s diskami do veľkosti 24 palcov.</li>
                <li>Vyvažujeme a prezúvame aj bezdierové disky.</li>
                <li>
                    Nízkoprofilové pneumatiky prezúvame
                    pomocou prídavného ramena.
                </li>
            </ul>

            <h2>Pneumatiky a príslušenstvo na objednávku</h2>

            <p>
                Na objednávku ponúkame pneumatiky rôznych rozmerov
                a značiek, plechové a zliatinové disky, batérie,
                oleje, kvapaliny a ďalší sortiment.
                Pre dostupnosť a cenovú ponuku nás kontaktujte.
            </p>

            <a href="<?= $link->url('home.rezervacia') ?>" class="button">
                Rezervovať termín
            </a>
        </div>

        <img
            src="<?= $link->asset('images/pneuservis_stroje.jpg') ?>"
            alt="Stroje na prezúvanie a vyvažovanie kolies v pneuservise"
            class="tyre-service-photo"
            width="480"
            height="640"
        >
    </div>

    <section class="wheel-washer">
        <img
            src="<?= $link->asset('images/umyvacka_kolies.jpg') ?>"
            alt="Umývačka kolies v prevádzke pneuservisu"
            class="wheel-washer-photo"
            width="150"
            height="200"
            loading="lazy"
        >

        <div>
            <h2>Umývačka kolies</h2>

            <p>
                Súčasťou našej profesionálnej výbavy je umývačka kolies,
                ktorá rýchlo a efektívne odstráni nánosy nečistôt.
            </p>

            <p>Môžete ju využiť na kolesá:</p>

            <ul>
                <li>osobných vozidiel,</li>
                <li>dodávok,</li>
                <li>off-road vozidiel,</li>
                <li>SUV.</li>
            </ul>

            <p>
                Umývame kolesá so šírkou do 360 mm
                s akýmkoľvek typom ráfikov či pneumatík.
            </p>
        </div>
    </section>

    <section class="tyre-service-benefits">
        <h2>Prezúvanie a vyvažovanie kolies</h2>

        <p>
            Vyvažujeme a prezúvame aj bezdierové disky,
            napríklad na vozidlách Peugeot a Citroën.
        </p>

        <ul>
            <li>
                Pri prezúvaní dbáme na ochranu diskov pred poškriabaním
                a iným poškodením.
            </li>
            <li>
                Prezúvame nízkoprofilové aj Runflat pneumatiky
                s dojazdovou technológiou.
            </li>
            <li>
                Kolesá presne vyvažujeme, aby sme minimalizovali
                vibrácie počas jazdy.
            </li>
            <li>
                Skrutky a matice uťahujeme pravidelne
                kalibrovanými momentovými kľúčmi.
            </li>
            <li>
                Na opravy defektov používame kvalitné nemecké materiály.
            </li>
        </ul>

        <a href="<?= $link->url('home.rezervacia') ?>" class="button">
            Rezervovať termín
        </a>
    </section>

</section>