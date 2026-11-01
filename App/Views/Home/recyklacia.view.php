<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<section class="recycling-page">
    <h1>Recyklácia vozidiel</h1>

    <div class="recycling-intro">
        <div>
            <h2>Zbavte sa svojho starého, nepotrebného či havarovaného auta!</h2>

            <p>
                Ponúkame recykláciu starých a havarovaných motorových
                vozidiel, bezplatný odťah a recykláciu vozidla,
                potvrdenie o prevzatí starého vozidla na spracovanie
                a vyradenie z evidencie vozidiel.
            </p>

            <p>
                Za niektoré vozidlá ponúkame aj vyplatenie dohodnutej
                kúpnej ceny. Vozidlo pri odovzdaní nemusí byť pojazdné,
                funkčné ani mať platnú STK.
            </p>

            <p>
                Pokiaľ takéto vozidlo máte, neváhajte nás kontaktovať.
                Dohodneme si podrobnosti jeho odovzdania alebo odvozu.
            </p>

            <a href="<?= $link->url('home.contact') ?>" class="button">
                Kontaktovať nás
            </a>
        </div>

        <img
            src="<?= $link->asset('images/recyklacia-prevadzka.jpg') ?>"
            alt="Prevádzka recyklácie vozidiel a pneuservisu"
            class="recycling-photo"
            width="349"
            height="262"
        >
    </div>

    <section class="recycling-documents">
        <h2>Čo si priniesť pri odovzdaní vozidla</h2>
        <p>Vyberte kategóriu, ktorá sa vás týka.</p>

        <details>
            <summary>Fyzická osoba</summary>
            <ul>
                <li>Staré vozidlo.</li>
                <li>
                    Majiteľ alebo splnomocnenec s overeným
                    splnomocnením a dokladom totožnosti.
                </li>
                <li>Veľký a malý technický preukaz.</li>
                <li>Tabuľky EČV.</li>
                <li>
                    Pri dočasne odhlásenom vozidle aj potvrdenie
                    o dočasnom odhlásení.
                </li>
            </ul>
        </details>

        <details>
            <summary>Fyzická osoba – dedič</summary>
            <ul>
                <li>Staré vozidlo.</li>
                <li>
                    Osvedčenie o dedičstve určujúce osobu,
                    na ktorú prešli povinnosti majiteľa vozidla.
                </li>
                <li>
                    Táto osoba alebo splnomocnenec s overeným
                    splnomocnením a dokladom totožnosti.
                </li>
                <li>Veľký a malý technický preukaz.</li>
                <li>Tabuľky EČV.</li>
                <li>
                    Pri dočasne odhlásenom vozidle aj potvrdenie
                    o dočasnom odhlásení.
                </li>
            </ul>
        </details>

        <details>
            <summary>Právnická osoba</summary>
            <ul>
                <li>Staré vozidlo.</li>
                <li>Výpis z obchodného registra určujúci štatutárneho zástupcu.</li>
                <li>
                    Štatutárny zástupca alebo splnomocnenec s overeným
                    splnomocnením a dokladom totožnosti.
                </li>
                <li>Pečiatka firmy.</li>
                <li>Veľký a malý technický preukaz.</li>
                <li>Tabuľky EČV.</li>
                <li>
                    Pri dočasne odhlásenom vozidle aj potvrdenie
                    o dočasnom odhlásení.
                </li>
            </ul>
        </details>

        <details>
            <summary>Leasingová spoločnosť</summary>
            <ul>
                <li>Staré vozidlo.</li>
                <li>
                    Splnomocnenie od leasingovej spoločnosti na nakladanie
                    s vozidlom na účel jeho odhlásenia.
                </li>
                <li>
                    Poverená osoba, štatutárny zástupca alebo splnomocnenec
                    s overeným splnomocnením a dokladom totožnosti.
                </li>
                <li>
                    Pri splnomocnení na firmu aj pečiatka firmy
                    a výpis z obchodného registra.
                </li>
                <li>Veľký a malý technický preukaz.</li>
                <li>Tabuľky EČV.</li>
                <li>
                    Pri dočasne odhlásenom vozidle aj potvrdenie
                    o dočasnom odhlásení.
                </li>
            </ul>
        </details>
    </section>
</section>