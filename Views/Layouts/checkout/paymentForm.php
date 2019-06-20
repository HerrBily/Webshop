<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
</header>
    <form method="post" class="address_main">
        <div class="form_item">
            <label class="select_label" for="existing_payment">vorhande Zahlungsmethode wählen</label>
            <select name="existing_payment" id="existing_payment" class="form-control">
                <option value="default">Bitte auswählen ... (optional)</option>
                <?php foreach ($payments as $payment): ?>
                    <option value="<?php echo $payment->id; ?>">
                        <?php echo "{$payment->name}: {$payment->number}"; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <h3>Neue Zahlungsmethode</h3>
            <div class="form_item">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form_item">
                <label for="number">Number</label>
                <input type="text" id="number" name="number">
            </div>
            <div class="form_item">
                <label for="ccv">CCV</label>
                <input type="text" id="ccv" name="ccv">
            </div>
            <div class="form_item">
                <label for="expires">Ablaufdatum</label>
                <input type="text" id="expires" name="expires">
            </div>
            <div class="form_item">
                <button type="submit">Speichern</button>
            </div>
    </form>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>