<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
</header>
    <main class="thanks_thanks">
        <h2>Thank you <?php echo $user->name; ?> for your order.</h2>
        <div class="thanks">
            <img src="<?php echo $base; ?>assets/img/thankyou.png" id="thankyou" alt="Dankes Bild mit Gin Cocktails">
        </div>
        <h2>Enjoy your Gin!</h2>
        <a href="products" class="btn_hover1">Back to Shop</a>
    </main>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>