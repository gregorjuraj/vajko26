<h1>Rezervácia pneuservisu</h1>
<p>
    Vyberte vozidlo, služby a termín návštevy.
    Rezervácia sa potvrdí automaticky.
</p>

<form class="reservation-form">
    <div class="reservation-columns">
        <section class="reservation-section">
            <h2>1. Vozidlo a služby</h2>

            <div class="form-field">
                <label for="vehicle">Vozidlo</label>
                <select id="vehicle" name="vehicle" required>
                    <option value="">Vyberte vozidlo</option>
                    <option value="1">Škoda Octavia · ZA123AB</option>
                    <option value="2">Volkswagen Golf · ZA456CD</option>
                </select>
            </div>

            <div class="form-field">
                <label for="service">Hlavná služba</label>
                <select id="service" name="service" required>
                    <option value="">Vyberte službu</option>
                    <option value="1">Prezutie kolies · 45 min · 40 €</option>
                    <option value="2">Vyváženie kolies · 30 min · 25 €</option>
                </select>
            </div>

            <fieldset class="additional-services">
                <legend>Doplnkové služby</legend>

                <label>
                    <input type="checkbox" name="extras[]" value="oil">
                    Výmena oleja · 30 min · od 30 €
                </label>

                <label>
                    <input type="checkbox" name="extras[]" value="pressure">
                    Kontrola tlaku pneumatík · 10 min · 5 €
                </label>
            </fieldset>

            <div class="form-field">
                <label for="note">Poznámka (nepovinná)</label>
                <textarea
                    id="note"
                    name="note"
                    rows="3"
                    placeholder="Doplňte informácie pre servis…"
                ></textarea>
            </div>
        </section>
        <section class="reservation-section">
            <h2>2. Dátum a čas</h2>

            <div class="form-field">
                <label for="date">Dátum návštevy</label>
                <input
                    type="date"
                    id="date"
                    name="date"
                    value="2026-10-27"
                    required
                >
            </div>

            <fieldset class="time-selection">
                <legend>Čas návštevy</legend>

                <div class="time-grid">
                    <label class="time-option">
                        <input type="radio" name="time" value="08:00" required>
                        <span>08:00</span>
                    </label>

                    <label class="time-option">
                        <input type="radio" name="time" value="09:30" disabled>
                        <span>09:30 · obsadené</span>
                    </label>

                    <label class="time-option">
                        <input type="radio" name="time" value="10:00" checked>
                        <span>10:00</span>
                    </label>

                    <label class="time-option">
                        <input type="radio" name="time" value="11:30">
                        <span>11:30</span>
                    </label>

                    <label class="time-option">
                        <input type="radio" name="time" value="13:00" disabled>
                        <span>13:00 · obsadené</span>
                    </label>

                    <label class="time-option">
                        <input type="radio" name="time" value="14:30">
                        <span>14:30</span>
                    </label>
                </div>
            </fieldset>

            <p class="availability-note">
                Obsadené termíny nie je možné vybrať.
                Zelenou je označený vybraný čas.
            </p>
        </section>
    </div>

    <section class="reservation-summary">
        <div>
            <h2>3. Súhrn rezervácie</h2>
            <p>Škoda Octavia · Prezutie kolies + výmena oleja</p>
            <p>27. 10. 2026 · 10:00 – 11:15 · Trvanie: 75 min</p>
            <p><strong>Orientačná cena: od 70 €</strong></p>
        </div>

        <div class="summary-actions">
            <button type="button" class="button">
                Potvrdiť rezerváciu
            </button>
            <p>Po potvrdení sa termín rezervuje.</p>
        </div>
    </section>
</form>