<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
</header>
<main class="login_login">
    <section class="login_main">
        <h3>Sign In</h3>
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
            <button type="submit">sign in</button>
        </form>
    </section>
</main>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>