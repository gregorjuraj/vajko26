<?php
/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Reservation $reservation */
/** @var \App\Models\Service[] $services */
/** @var int[] $selectedIds */
?>

<section class="reservations-page">
    <h1>Upraviť rezerváciu</h1>

    <?php if (!empty($error)) { ?>
        <p role="alert"><?= e($error) ?></p>
    <?php } ?>

    <form
        method="post"
        action="<?= $link->url('reservation.edit', ['id' => $reservation->getId()]) ?>"
    >
        <div class="form-field">
            <label for="start_at">Začiatok rezervácie</label>
            <input
                type="datetime-local"
                id="start_at"
                name="start_at"
                value="<?= e(date('Y-m-d\TH:i', strtotime($reservation->getStartAt()))) ?>"
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
                        <?= in_array($service->getId(), $selectedIds)
                            ? 'checked'
                            : '' ?>

                        <?= !$service->isActive() && !in_array($service->getId(), $selectedIds)
                            ? 'disabled'
                            : '' ?>
                    >

                    <?= e($service->getName()) ?>
                    · <?= e($service->getDuration()) ?> min

                    <?php if (!$service->isActive()) { ?>
                        (neaktívna)
                    <?php } ?>
                </label>
            <?php } ?>
        </fieldset>

        <div class="form-field">
            <label for="note">Poznámka</label>
            <textarea
                id="note"
                name="note"
                rows="3"
            ><?= e($reservation->getNote()) ?></textarea>
        </div>

        <p>
            <button type="submit" class="button">Uložiť zmeny</button>
            <a href="<?= $link->url('reservation.index') ?>">Zrušiť</a>
        </p>
    </form>
</section>