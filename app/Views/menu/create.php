<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="col-8 mt-5">Add Menu Form</h2>
            <form action="/menu/saveMenu" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="menuName" class="col-sm-2 col-form-label">Menu Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menuName" name="menuName" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price" placeholder="15000">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image" name="image" placeholder="food.PNG">
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
                <!-- <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary">Add Menu</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>