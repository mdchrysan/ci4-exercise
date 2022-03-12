<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">You can find us here!</h1>
            <div class="row">
                <?php foreach ($address as $a) : ?>
                    <div class="col-sm-4">
                        <div class="card text-center border-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?= $a['type']; ?></strong></h5>
                                <p class="card-text"><?= $a['address']; ?></p>
                                <p class="card-text"><?= $a['city']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>