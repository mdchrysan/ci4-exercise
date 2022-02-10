<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row mt-5">
                <h1 class="col-md-10">Daftar Menu Warmindo</h1>
                <a href="/menu/create" class="col-md-2 btn btn-dark mb-3">Add Menu</a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= $m['image']; ?>" alt="img here" height="100"></td>
                            <td><?= $m['name']; ?></td>
                            <td><a href="/menu/<?= $m['slug']; ?>" class="btn btn-dark">Details</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>