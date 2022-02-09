<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-5">Detail Menu</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $menu['image']; ?>" class="img-fluid rounded-start" alt="Menu Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $menu['name']; ?></h5>
                            <p class="card-text"><?= $menu['description']; ?></p>
                            <p class="card-text"><small class="text-muted">IDR <?= $menu['price']; ?></small></p>
                            <!-- buttons -->
                            <a class="btn btn-primary" href="/menu">Back to Menu</a>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>