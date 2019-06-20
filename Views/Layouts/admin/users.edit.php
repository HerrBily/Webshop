<?php require_once __DIR__ . '/../../Partials/Admin/Header.php'; ?>
</header>

    <h3 class="edit_add_header">Edit: <?php echo $user->name; ?></h3>
        <form action="admin/users/update/<?php echo $user->id; ?>" method="post" enctype="multipart/form-data" class="edit_add_main">
            <div class="form_item">
                <label for="name">Name:</label>
                <input type="text" value="<?php echo $user->name; ?>" name="name" id="name">
            </div>
            <div class="form_item">
                <label for="email">E-Mail:</label>
                <input type="email" value="<?php echo $user->email; ?>" name="email" id="email">
            </div>
            <div class="form_item">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Send</button>
        </form>

<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>