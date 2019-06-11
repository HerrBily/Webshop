<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
<main>   
    <section class="second_main">
                <h2>Gin</h2>
                <div class="items">
                    <?php foreach ($products as $product): ?>
                    <div class="item">
                    <div class="item_section">
                        <h3><?php echo $product->name; ?> - <?php echo $product->price ?> €</h3>
                        <p><?php echo $product->description; ?></p>
                        <a href="products/show/<?php echo $product->id; ?>">more</a>
                    </div>
                    <img src="<?php echo $base; ?>assets/<?php echo $product->images[0]; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
        </section>
</main>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>