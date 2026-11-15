<?php
/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Service[] $services */
?>

<section class="reservations-page">
    <h1>Pridať rezerváciu</h1>

    <?php if (!empty($error)) { ?>
        <p role="alert"><?= e($error) ?></p>
    <?php } ?>

    <?php if (empty($services)) { ?>
        <p>Najprv pridajte aspoň jednu aktívnu službu.</p>

        <a href="<?= $link->url('service.create') ?>" class="button">
            Pridať službu
        </a>
    <?php } else { ?>
        <form
            method="post"
            action="<?= $link->url('reservation.create') ?>"
        >
            <div class="form-field">
                <label for="start_at">Začiatok rezervácie</label>
                <input
                    type="datetime-local"
                    id="start_at"
                    name="start_at"
                    required
                >
            </div>

            <fieldset class="additional-services">
                <legend>Vyberte služby</legend>

                <?php foreach ($services as $service) { ?>
                    <label>
                        <input
                            type="checkbox"
                            name="service_ids[]"
                            value="<?= e($service->getId()) ?>"
                        >

                        <?= e($service->getName()) ?>
                        · <?= e($service->getDuration()) ?> min
                        · <?= e($service->getPrice()) ?> €
                    </label>
                <?php } ?>
            </fieldset>

            <div class="form-field">
                <label for="note">Poznámka</label>
                <textarea
                    id="note"
                    name="note"
                    rows="3"
                ></textarea>
            </div>

            <p>
                <button type="submit" class="button">
                    Uložiť rezerváciu
                </button>

                <a href="<?= $link->url('reservation.index') ?>">
                    Zrušiť
                </a>
            </p>
        </form>
    <?php } ?>
</section>