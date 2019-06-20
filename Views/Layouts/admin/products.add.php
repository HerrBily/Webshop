<?php require_once __DIR__ . '/../../Partials/Admin/Header.php'; ?>
</header>

    <h3 class="edit_add_header">Add Product</h3>

        <form action="admin/products/add" method="post" enctype="multipart/form-data" class="edit_add_main">
            <div class="form_item">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form_item">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price">
            </div>
            <div class="form_item">
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock">
            </div>
            <div class="form_item">
                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="img_save">
                <label for="images">Picture:</label>
                <input type="file" name="images[]" id="images" multiple>
            </div>
            <button type="submit">Send</button>
        </form>

<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>