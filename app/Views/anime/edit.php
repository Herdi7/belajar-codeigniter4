<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <form action="/Anime/update/<?= $anime['id']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $anime['slug']; ?>">
            <input class="mt-3 w-100 d-block form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="nama" name="judul" value="<?= old('judul', $anime['judul']); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('judul'); ?>
            </div>
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="produser" name="produser" value="<?= old('produser', $anime['produser']); ?>">
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="img" name="img" value="<?= old('img', $anime['img']); ?>">
            <button type="submit" class="btn btn-primary mt-3">Ubah</button>
        </form>
    </div>
<?= $this->endSection(); ?> 