<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!--?= $validation->listErrors(); ?-->
            <h2 class="col-8 mt-5">Update Menu Form</h2>
            <form action="/menu/update/<?= $menu['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="menuName" class="col-sm-2 col-form-label">Menu Name</label>
                    <div class="col-sm-10">
                        <!-- ternary operation for is-invalid class -->
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="menuName" name="menuName" value="<?= $menu['name']; ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="<?= $menu['description']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <!-- ternary operation for is-invalid class -->
                        <input type="number" class="form-control <?= ($validation->hasError('price')) ? 'is-invalid' : ''; ?>" id="price" name="price" placeholder="15000" value="<?= $menu['price']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('price'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image" name="image" placeholder="food.PNG" value="<?= $menu['image']; ?>">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Category</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="catRadios" id="category1" value="Indomie" checked>
                            <label class="form-check-label" for="category1">
                                Indomie
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="catRadios" id="category2" value="Minuman">
                            <label class="form-check-label" for="category2">
                                Minuman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="catRadios" id="category3" value="Cemilan">
                            <label class="form-check-label" for="category3">
                                Cemilan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Subcategory</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subcatRadios" id="subcat1" value="Goreng" checked>
                            <label class="form-check-label" for="subcat1">
                                Goreng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subcatRadios" id="subcat2" value="Kuah">
                            <label class="form-check-label" for="subcat2">
                                Kuah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subcatRadios" id="subcat3" value="Gorengan">
                            <label class="form-check-label" for="subcat3">
                                Gorengan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subcatRadios" id="subcat4" value="Bakaran">
                            <label class="form-check-label" for="subcat4">
                                Bakaran
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Update Menu</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>