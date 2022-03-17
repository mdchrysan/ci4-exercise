<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php endif ?>
            <h1 class="mt-5">Daftar Menu Warmindo</h1>
            <div class="row">
                <form action="" method="POST" class="col-md-10">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ketikkan menu yang ingin dicari.." name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" id="btnCariMenu" name="submit">Cari</button>
                    </div>
                </form>
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
                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
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
            <!-- parameter: table name, pagination name -->
            <?= $pager->links('menu', 'menu_page') ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>