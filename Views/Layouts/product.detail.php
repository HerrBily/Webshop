<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
    <section class="detail_main"> 
        <section class="gin_container">
            <?php foreach ($product->images as $image): ?>
                <img src="<?php echo "$base/Assets/$image"; ?>" alt="<?php echo $product->name; ?>">
            <?php endforeach; ?>
            
            <h3>
                <?php echo $product->name; ?> - 
                <?php echo sprintf('%.2f €', $product->price); ?>
            </h3>
            <p>
                <?php echo $product->description; ?>
            </p>
            
            <?php if ($product->stock <= 0): ?>
                <div class="out-of-stock">
                Dieses Produkt ist derzeit nicht lieferbar
                </div>
            <?php endif; ?>
            
            <a href="cart/add/<?php echo $product->id; ?>">Add To Cart</a>
        </section>

    </section>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>