<?php
/** @var \App\Models\Service[] $services */
/** @var \Framework\Support\LinkGenerator $link */
?>

<section class="services-page">
    <h1>Správa služieb</h1>
    <p>
        <a href="<?= $link->url('service.create') ?>" class="button">
            Pridať službu
        </a>
    </p>

    <?php if (empty($services)) { ?>
        <p>Zatiaľ nie sú pridané žiadne služby.</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($services as $service) { ?>
                <li>
                    <h2><?= e($service->getName()) ?></h2>
                    <p><?= e($service->getDescription()) ?></p>
                    <p>Cena: <?= e($service->getPrice()) ?> €</p>
                    <p>Trvanie: <?= e($service->getDuration()) ?> min</p>
                    <p>
                        Stav:
                        <?= $service->isActive() ? 'Aktívna' : 'Neaktívna' ?>
                    </p>

                    <a
                        href="<?= $link->url('service.edit', ['id' => $service->getId()]) ?>"
                        class="button button-edit"
                    >
                        Upraviť
                    </a>

                    <form method="post" action="<?= $link->url('service.delete') ?>">
                        <input
                            type="hidden"
                            name="id"
                            value="<?= e($service->getId()) ?>"
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