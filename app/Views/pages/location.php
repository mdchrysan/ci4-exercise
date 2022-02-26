<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">You can find us here!</h1>
            <?php foreach ($address as $a) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <ul>
                            <li><?= $a['type']; ?></li>
                            <li><?= $a['address']; ?></li>
                            <li><?= $a['city']; ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>