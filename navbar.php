<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/images/logo.png" height="32" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <?php if (!isset($_SESSION['email'])): ?>
            <a class="navbar-brand" href="login.php">
                <button type="button" class="btn btn-dark">Masuk</button>
            </a>
        <?php else: ?>
            <div>
                <a class="navbar-brand" href="akun.php">
                    Akun
                </a>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</button>
            </div>
        <?php endif; ?>
    </div>
</nav>