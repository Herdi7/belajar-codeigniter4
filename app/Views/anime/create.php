<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <form action="/Anime/save" method="post">
            <?= csrf_field(); ?>
            <input class="mt-3 w-100 d-block form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="nama" name="judul" value="<?= old('judul'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('judul'); ?>
            </div>
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="produser" name="produser" value="<?= old('produser'); ?>">
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="img" name="img" value="<?= old('img'); ?>">
            <button type="submit" class="btn btn-success mt-3">Tambah</button>
        </form>
    </div>
<?= $this->endSection(); ?>