<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
<main class="login_login">
    <section class="login_main">
        <h3>Sign In</h3>

    <?php if (isset($error)) : ?>
        <p class="error"><?php echo $error?></p>
    <?php
    endif;
    ?>
        <form method="post">
            <div class="form_item">
                <label for="email">*Email address</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form_item">
                <label for="password">*Password</label>
                <input type="password" id="password" name="password">
            </div>

            <input type="hidden" name="_referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
            <button type="submit" class="btn_hover1">sign in</button>
        </form>
        <p>You don't have an account?</p>
        <a href="signup" class="btn_hover1">sign up</a>
    </section>
</main>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>