<?php require_once __DIR__ . '/../../Partials/Admin/Header.php'; ?>
</header>

    <h3 class="edit_add_header">Edit: <?php echo $product->name; ?></h3>

        <form action="admin/products/update/<?php echo $product->id; ?>" method="post" enctype="multipart/form-data" class="edit_add_main">
            <div class="form_item">
                <label for="name">Name:</label>
                <input type="text" value="<?php echo $product->name; ?>" name="name" id="name">
            </div>
            <div class="form_item">
                <label for="price">Price:</label>
                <input type="number" value="<?php echo $product->price; ?>" name="price" id="price">
            </div>
            <div class="form_item">
                <label for="stock">Stock</label>
                <input type="number" value="<?php echo $product->stock; ?>" name="stock" id="stock">
            </div>
            <div class="form_item">
                <label for="description">Description:</label>
                <textarea name="description" id="description"><?php echo $product->description; ?></textarea>
            </div>
            <div class="img_save">
                <label for="images">Pictures:</label>
                <input type="file" name="images[]" id="images" multiple>
            </div>
            <div class="form_item">
                <?php foreach ($product->images as $image): ?>
                    <div class="img_delete">
                        <img src="<?php echo $base . 'assets/' . $image; ?>">
                        <div class="input_delete">
                            <label>Delete?</label>
                            <input class="delete_box" type="checkbox" name="delete[<?php echo $image; ?>]">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
                <button type="submit">Send</button>
        </form>

<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>