<?php
/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Service $service */
?>

<section class="services-page">
    <h1>Upraviť službu</h1>

    <form
        method="post"
        action="<?= $link->url('service.edit', ['id' => $service->getId()]) ?>"
    >
        <div class="form-field">
            <label for="name">Názov služby</label>
            <input
                type="text"
                id="name"
                name="name"
                value="<?= e($service->getName()) ?>"
                maxlength="100"
                required
            >
        </div>

        <div class="form-field">
            <label for="description">Opis</label>
            <textarea
                id="description"
                name="description"
                rows="4"
                required
            ><?= e($service->getDescription()) ?></textarea>
        </div>

        <div class="form-field">
            <label for="price">Cena v €</label>
            <input
                type="number"
                id="price"
                name="price"
                value="<?= e($service->getPrice()) ?>"
                min="0"
                max="99999999.99"
                step="0.01"
                required
            >
        </div>

        <div class="form-field">
            <label for="duration">Trvanie v minútach</label>
            <input
                type="number"
                id="duration"
                name="duration"
                value="<?= e($service->getDuration()) ?>"
                min="1"
                step="1"
                required
            >
        </div>

        <label>
            <input
                type="checkbox"
                name="active"
                value="1"
                <?= $service->isActive() ? 'checked' : '' ?>
            >
            Aktívna služba
        </label>

        <p>
            <button type="submit" class="button">Uložiť zmeny</button>
            <a href="<?= $link->url('service.index') ?>">Zrušiť</a>
        </p>
    </form>
</section>