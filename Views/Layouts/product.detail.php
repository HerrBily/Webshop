<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
    <section class="detail_main"> 
        <section class="gin_container">
            <?php foreach ($product->images as $image): ?>
                <img src="<?php echo "$base/assets/$image"; ?>" alt="<?php echo $product->name; ?>">
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
        <h4 class="similar_header">Similar Products</h4>
        <section class="similar_product">
            
            <div class="similar_items">
                <a href="products/show/<?php echo $product->id; ?>"><?php echo $product->name; ?></a>
                <img src="<?php echo $base; ?>assets/<?php echo $product->images[0]; ?>" alt="">
            </div>
           
        </section> 
    </section>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>