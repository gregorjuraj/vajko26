<?php
/** @var \App\Models\Reservation[] $reservations */
/** @var \Framework\Support\LinkGenerator $link */
?>

<section class="reservations-page">
    <h1>Správa rezervácií</h1>

    <p>
        <a href="<?= $link->url('reservation.create') ?>" class="button">
            Pridať rezerváciu
        </a>
    </p>

    <?php if (empty($reservations)) { ?>
        <p>Zatiaľ nie sú vytvorené žiadne rezervácie.</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($reservations as $reservation) { ?>
                <li>
                    <h2>Rezervácia č. <?= e($reservation->getId()) ?></h2>

                    <p>Začiatok: <?= e($reservation->getStartAt()) ?></p>
                    <p>Koniec: <?= e($reservation->getEndAt()) ?></p>
                    <p>Poznámka: <?= e($reservation->getNote()) ?></p>
                    <p>
                        Stav:
                        <?= $reservation->getStatus() === 'valid'
                            ? 'Platná'
                            : 'Zrušená' ?>
                    </p>

                    <h3>Vybrané služby</h3>

                    <ul>
                        <?php foreach ($reservation->getServiceLinks() as $serviceLink) { ?>
                            <?php $service = $serviceLink->getService(); ?>

                            <?php if ($service !== null) { ?>
                                <li><?= e($service->getName()) ?></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>

                    <a
                        href="<?= $link->url('reservation.edit', ['id' => $reservation->getId()]) ?>"
                        class="button button-edit"
                    >
                        Upraviť
                    </a>

                    <form method="post" action="<?= $link->url('reservation.delete') ?>">
                        <input
                            type="hidden"
                            name="id"
                            value="<?= e($reservation->getId()) ?>"
                        >

                        <button type="submit" class="button button-delete">
                            Odstrániť
                        </button>
                    </form>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</section>