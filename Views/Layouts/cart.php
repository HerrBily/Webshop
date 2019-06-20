<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>

    <main class="cart_cart">
        <h2 class="cart_header">Shopping Cart</h2>

        <?php if (empty($products)): ?>
            <h2 class="cart_empty">Cart empty!</br> It's never too early for Gin o'clock.</h2>
        <?php else: ?>
        <section class="cart_main">
                <table class="cart_list">
                    <thead>
                        <tr>
                            <th class="item_left">item</th>
                            <th class="hidden">name</th>
                            <th>unit price</th>
                            <th>quantity</th>
                            <th>final price</th>
                            <th>remove</th>
                        </tr>
                    </thead>
                    <?php foreach ($products as $product) : ?>
                    <tr>
                    <td class="item_left">
                        <img src="<?php echo $base; ?>assets/<?php echo $product->images[0]; ?>">
                    <td data-label="name" class="item_left">
                        <?php echo $product->name; ?>
                    </td>
                    </td>
                    <td data-label="unit price">
                        <?php echo $product->price; ?> €
                    </td>
                    <td data-label="quantity">
                        <?php echo $_SESSION['cart'][$product->id]; ?>
                    </td>
                    <td data-label="final price">
                        <?php echo $_SESSION['cart'][$product->id] * $product->price; ?>
                    </td>
                    <td data-label="remove">
                        <a href="cart/remove/<?php echo $product->id; ?>">
                            <svg id="trash" width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.42857H18.5714C19.3571 1.42857 20 2.07143 20 2.85714C20 3.64286 19.3571 4.28571 18.5714 4.28571H1.42857C0.642857 4.28571 0 3.64286 0 2.85714C0 2.07143 0.642857 1.42857 1.42857 1.42857H5L6.01429 0.414286C6.27143 0.157143 6.64286 0 7.01429 0H12.9857C13.3571 0 13.7286 0.157143 13.9857 0.414286L15 1.42857ZM4.28595 25.7143C2.71452 25.7143 1.4288 24.4286 1.4288 22.8571V8.57143C1.4288 7 2.71452 5.71429 4.28595 5.71429H15.7145C17.2859 5.71429 18.5717 7 18.5717 8.57143V22.8571C18.5717 24.4286 17.2859 25.7143 15.7145 25.7143H4.28595Z" fill="#6D6F8C"/>
                            </svg>
                        </a>
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
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
                    <a href="checkout/address" class="btn_hover1">checkout</a>
                <?php else: ?>
                    <a href="login">checkout</a>
                <?php endif; ?>
            </section>
        </section>
        <?php endif; ?>
    </main>       
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>