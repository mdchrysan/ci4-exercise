<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">You can find us here!</h1>
            <div class="row">
                <?php foreach ($branch as $b) : ?>
                    <div class="col-sm-4">
                        <div class="card text-center border-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?= $b['branch_name']; ?></strong></h5>
                                <p class="card-text"><?= $b['address']; ?></p>
                                <p class="card-text"><?= $b['city']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>