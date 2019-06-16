<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
</header>
    

        <form method="post" class="address_main">
            <div class="form_item">
                <label class="select_label" for="existing_address">vorhande Adresse wählen</label>
                <select name="existing_address" id="existing_address">
                    <option value="default">Bitte auswählen ... (optional)</option>
                    <?php foreach ($addresses as $address): ?>
                        <option value="<?php echo $address->id; ?>">
                            <?php echo "{$address->name}: {$address->street} {$address->streetNr}"; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <h3>Neue Adresse</h3>
                <div class="form_item">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form_item">
                    <label for="street">Straße:</label>
                    <input type="text" id="street" name="street">
                </div>
                <div class="form_item">
                    <label for="streetNr">Hausnummer:</label>
                    <input type="text" id="streetNr" name="streetNr">
                </div>
                <div class="form_item">
                    <label for="door">Türnummer:</label>
                    <input type="text" id="door" name="door">
                </div>
                <div class="form_item">
                    <label for="zip">PLZ:</label>
                    <input type="text" id="zip" name="zip">
                </div>
                <div class="form_item">
                    <label for="city">Stadt:</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="form_item">
                    <label class="select_label" for="country">Land:</label>
                    <select id="country" name="country">
                        <?php foreach (Countries::$countries as $abbr => $country): ?>
                            <option value="<?php echo $abbr; ?>"><?php echo $country; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <button type="submit">Speichern</button>
            </form>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>