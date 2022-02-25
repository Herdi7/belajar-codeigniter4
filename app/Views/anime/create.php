<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <form action="/Anime/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input class="mt-3 w-100 d-block form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="nama" name="judul" value="<?= old('judul'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('judul'); ?>
            </div>
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="produser" name="produser" value="<?= old('produser'); ?>">
            <div class="col-12 row my-3">
                <img src="/img/default.jpg" id="imgPreview" class="col-2 border-1" style="height: 100px;">
                <div class="col-10">
                    <input class="form-control <?= ($validation->hasError('img')) ? 'is-invalid' : ''; ?>" type="file" name="img" oninput="imgPreview.src=window.URL.createObjectURL(this.files[0])">
                </div>
            </div>
            <div class="invalid-feedback">
                <?= $validation->getError('img'); ?>
            </div>
            <button type="submit" class="btn btn-success mt-3">Tambah</button>
        </form>
    </div>
<?= $this->endSection(); ?>