<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
    <h3 class="signup_header">Sign Up</h3>

    <?php
    if (isset($error)) : ?>
        <p class="error"><?php echo $error?></p>
    <?php
    endif;
    ?>

    <form class="signup_main" method="post">
        <div class="form_item">
            <label for="name">*Name</label>
            <input type="text" id="name" name="name" required autofocus>
        </div>

        <div class="form_item">
            <label for="email">*Email address</label>
            <input type="text" id="email" name="email" required autofocus>
        </div>

        <div class="form_item">
            <label for="password">*Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form_item">
            <label for="password_repeat">*Password Repeat</label>
            <input type="password" id="password_repeat" name="password_repeat" required>
        </div>

        <button type="submit" class="btn_hover1">Sign Up</button>
    </form>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>