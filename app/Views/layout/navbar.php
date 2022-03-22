<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Warmindo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                <a class="nav-link" href="<?= base_url('/branch'); ?>">Location</a>
                <a class="nav-link" href="<?= base_url('/menu'); ?>">Menu</a>
            </div>
            <?php if (logged_in()) : ?>
                <a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a>
            <?php else : ?>
                <a class="nav-link" href="<?= base_url('/logout'); ?>">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>