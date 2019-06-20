<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
</header>
    <main class="summary_summary">
    <section class="summary_main">

        <h3>Order</h3>

        <?php foreach ($products as $product) : ?>
            <div class="order_summary">
            <div class="container_img">
                <img src="<?php echo $base; ?>assets/<?php echo $product->image_small[0]; ?>">
                <p><?php echo $product->name; ?></p><span>x<?php echo $product->id; ?></span>
            </div>
                <p><?php echo $product->amount * $product->price; ?> €</p>
            </div>
        <?php endforeach; ?>

        <section class="price_summary">
            <div class="price_item">
                <div class="flex_base">
                    <p>Subtotal</p>
                </div>
                <div class="flex_base">
                    <span><?php echo sprintf('%.2f €', $total_price); ?></span>
                </div>
            </div>
            <div class="price_item">
                <div class="flex_base">
                    <p>Shipping</p>
                </div>
                <div class="flex_base">
                    <span><?php echo sprintf('%.2f €', $shipping); ?></span>
                </div>
            </div>
            <div class="price_item">
                <div class="flex_base">
                    <p>Total</p>
                </div>
                <div class="flex_base">
                    <span><?php echo sprintf('%.2f €', $total); ?></span>
                </div>
            </div>
        </section>

        <section class="information">
            <div class="shipping_summary">
                <h2>Shippingaddress</h2>
                <p><?php echo $address->name; ?></p>
                <p><?php echo $address->street . ' ' . $address->streetNr; ?></p>
                <p>Door <?php echo $address->door; ?></p>
                <p><?php echo $address->city . ', ' . $address->zip; ?></p>
                <p><?php echo $address->country; ?></p>
            </div>
        
            <div class="payment_summary">
                <h2>Payment</h2>
                <p><?php echo $payment->name; ?></p>
                <p>****<?php echo $test = substr($payment->number, -4); ?></p>
                <p><?php echo $payment->expires; ?></p>
            </div>
    </section>

        <a href="checkout/place/<?php echo $order->id; ?>">zahlungspflichtig bestellen</a>

    </section>
    </main>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>