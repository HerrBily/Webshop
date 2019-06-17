<?php require_once __DIR__ . '/../../Partials/Admin/Header.php'; ?>
</header>
<section class="admin_list">
    <div class="add_product">
        <a href="admin/products/add" class="add_btn">Add New Product</a>
    </div>
    <div class="admin_item">
        <?php foreach ($products as $product) : ?>
            <div class="admin_container">
                <img src="<?php echo $base; ?>assets/<?php echo $product->image_small[0]; ?>">
                <p>
                    <?php echo $product->name; ?>
                </p>
                <a href="admin/products/edit/<?php echo $product->id; ?>">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2922 3.75956C25.8491 4.31654 25.8491 5.21626 25.2922 5.77323L22.6787 8.38672L17.3232 3.03122L19.9367 0.417729C20.4936 -0.139243 21.3934 -0.139243 21.9503 0.417729L25.2922 3.75956ZM0 24.9959V20.6544C0 20.4544 0.0714067 20.2831 0.21422 20.1403L15.7952 4.55931L21.1507 9.91481L5.55544 25.4958C5.42691 25.6386 5.24125 25.71 5.0556 25.71H0.714067C0.31419 25.71 0 25.3958 0 24.9959Z" fill="#6D6F8C"
                        />
                    </svg>
                    <span>Edit</span>
                </a>
                <a href="admin/products/delete/<?php echo $product->id; ?>">
                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.42857H18.5714C19.3571 1.42857 20 2.07143 20 2.85714C20 3.64286 19.3571 4.28571 18.5714 4.28571H1.42857C0.642857 4.28571 0 3.64286 0 2.85714C0 2.07143 0.642857 1.42857 1.42857 1.42857H5L6.01429 0.414286C6.27143 0.157143 6.64286 0 7.01429 0H12.9857C13.3571 0 13.7286 0.157143 13.9857 0.414286L15 1.42857ZM4.28595 25.7143C2.71452 25.7143 1.4288 24.4286 1.4288 22.8571V8.57143C1.4288 7 2.71452 5.71429 4.28595 5.71429H15.7145C17.2859 5.71429 18.5717 7 18.5717 8.57143V22.8571C18.5717 24.4286 17.2859 25.7143 15.7145 25.7143H4.28595Z" fill="#6D6F8C"/>
                    </svg>
                    <span>Remove</span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>