<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>

    <main class="cart_cart">
        <h2 class="cart_header">Shopping Cart</h2>

        <?php if (empty($products)): ?>
            <p class="has-danger">Oh noooo :( Warenkorb leer!</p>
        <?php else: ?>
        <section class="cart_main">
                <table class="cart_list">
                    <tr>
                        <th>item</th>
                        <th class="hidden">name</th>
                        <th>unit price</th>
                        <th>quantity</th>
                        <th>final price</th>
                        <th>remove</th>
                    </tr>
                    <?php foreach ($products as $product) : ?>
                    <tr>
                    <td class="item_left">
                    <img src="<?php echo $base; ?>assets/<?php echo $product->image_small[0]; ?>">
                    <td class="item_left">
                        <?php echo $product->name; ?>
                    </td>
                    </td>
                    <td>
                    <?php echo $product->price; ?> €
                    </td>
                    <td>
                    <?php echo $_SESSION['cart'][$product->id]; ?>
                    </td>
                    <td>
                    <?php echo $_SESSION['cart'][$product->id] * $product->price; ?>
                    </td>
                    <td>
                    <a href="cart/remove/<?php echo $product->id; ?>">x</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                
            <section class="summary">
                <h3>Summary</h3>
                <div>
                    <p>Subtotal</p>
                    <span><?php echo sprintf('%.2f €', $total); ?></span>
                </div>
                <div>
                    <p>Shipping</p>
                    <span><?php echo sprintf('%.2f €', $shipping); ?></span>
                </div>
                <div class="total_border">
                    <p>Total</p>
                    <span><?php echo sprintf('%.2f €', $totalall); ?></span>
                </div>
                <a>checkout</a>
            </section>
        </section>
        <?php endif; ?>

    </main>
       
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>