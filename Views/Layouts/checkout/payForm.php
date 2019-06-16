<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
    <div class="container">

        <form method="post">
            <h2>Zahlungsmethode</h2>
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="pay">Kreditkartennummer</label>
                    <input type="text" class="form-control" id="pay" name="pay" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
            </div>
        </form>

    </div>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>